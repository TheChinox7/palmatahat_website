<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use App\Models\Attribute;
use App\Models\ProductAttributeValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->input('q');
        $categoryId = $request->input('category_id');
        $products = Product::with('category')
            ->when($q, fn($query) => $query->where(function($q2) use ($q){
                $q2->where('name','like',"%$q%")->orWhere('slug','like',"%$q%");
            }))
            ->when($categoryId, fn($query) => $query->where('category_id', $categoryId))
            ->orderByDesc('id')->paginate(15)->withQueryString();
        return view('admin.products.index', compact('products','q','categoryId'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => ['required','exists:categories,id'],
            'name' => ['required','string','max:255'],
            'slug' => ['required','string','max:255','unique:products,slug'],
            'description' => ['nullable','string'],
            'price' => ['required','numeric','min:0'],
            'stock' => ['required','integer','min:0'],
            'image_path' => ['nullable','string','max:255'],
            'images.*' => ['nullable','image','max:5120'],
        ]);
        $product = Product::create($validated);

        if($request->hasFile('images')){
            $dir = public_path('products/'.$product->id);
            if(!File::exists($dir)) File::makeDirectory($dir, 0755, true);
            $order = 0;
            foreach($request->file('images') as $file){
                $filename = uniqid().'.'.$file->getClientOriginalExtension();
                $file->move($dir, $filename);
                ProductImage::create([
                    'product_id' => $product->id,
                    'path' => 'products/'.$product->id.'/'.$filename,
                    'sort_order' => $order++,
                    'is_cover' => false,
                ]);
            }
            if(!$product->images()->where('is_cover',true)->exists()){
                $first = $product->images()->orderBy('sort_order')->first();
                if($first){ $first->update(['is_cover' => true]); }
            }
        }

        return redirect()->route('admin.products.edit', $product);
    }

    public function edit(Product $product)
    {
        $categories = Category::orderBy('name')->get();
        $attributes = Attribute::with('options')->orderBy('name')->get();
        $values = $product->attributeValues()->get();
        return view('admin.products.edit', compact('product','categories','attributes','values'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'category_id' => ['required','exists:categories,id'],
            'name' => ['required','string','max:255'],
            'slug' => ['required','string','max:255','unique:products,slug,'.$product->id],
            'description' => ['nullable','string'],
            'price' => ['required','numeric','min:0'],
            'stock' => ['required','integer','min:0'],
            'image_path' => ['nullable','string','max:255'],
            'images.*' => ['nullable','image','max:5120'],
        ]);
        $product->update($validated);

        // Guardar atributos
        $textInputs = $request->input('attr_text', []);
        foreach($textInputs as $attrId => $val){
            ProductAttributeValue::updateOrCreate(
                ['product_id'=>$product->id,'attribute_id'=>$attrId,'attribute_option_id'=>null],
                ['value'=>$val]
            );
        }
        $selectInputs = $request->input('attr_select', []);
        foreach($selectInputs as $attrId => $optId){
            // borrar existentes del atributo
            ProductAttributeValue::where('product_id',$product->id)->where('attribute_id',$attrId)->delete();
            if($optId){
                ProductAttributeValue::create([
                    'product_id'=>$product->id,
                    'attribute_id'=>$attrId,
                    'attribute_option_id'=>$optId,
                ]);
            }
        }
        $multiInputs = $request->input('attr_multi', []);
        foreach($multiInputs as $attrId => $optIds){
            ProductAttributeValue::where('product_id',$product->id)->where('attribute_id',$attrId)->delete();
            foreach(($optIds ?? []) as $optId){
                ProductAttributeValue::create([
                    'product_id'=>$product->id,
                    'attribute_id'=>$attrId,
                    'attribute_option_id'=>$optId,
                ]);
            }
        }

        if($request->has('save_images')){
            $orders = $request->input('order', []);
            $coverId = $request->input('cover_id');
            foreach($orders as $imageId => $sort){
                $img = ProductImage::where('product_id',$product->id)->where('id',$imageId)->first();
                if($img){ $img->update(['sort_order' => (int)$sort]); }
            }
            if($coverId){
                ProductImage::where('product_id',$product->id)->update(['is_cover'=>false]);
                $img = ProductImage::where('product_id',$product->id)->where('id',$coverId)->first();
                if($img){ $img->update(['is_cover'=>true]); }
            }
        }

        if($request->hasFile('images')){
            $dir = public_path('products/'.$product->id);
            if(!File::exists($dir)) File::makeDirectory($dir, 0755, true);
            $order = ($product->images()->max('sort_order') ?? -1) + 1;
            foreach($request->file('images') as $file){
                $filename = uniqid().'.'.$file->getClientOriginalExtension();
                $file->move($dir, $filename);
                ProductImage::create([
                    'product_id' => $product->id,
                    'path' => 'products/'.$product->id.'/'.$filename,
                    'sort_order' => $order++,
                    'is_cover' => false,
                ]);
            }
        }
        return redirect()->route('admin.products.edit', $product);
    }

    public function destroy(Product $product)
    {
        // eliminar imágenes físicas
        $dir = public_path('products/'.$product->id);
        if(File::exists($dir)) File::deleteDirectory($dir);
        $product->delete();
        return redirect()->route('admin.products.index');
    }

    public function deleteImage(Product $product, ProductImage $image)
    {
        if($image->product_id !== $product->id) abort(404);
        $full = public_path($image->path);
        if(File::exists($full)) File::delete($full);
        $image->delete();
        return back();
    }

    public function updateImages(Product $product, Request $request)
    {
        $orders = $request->input('order', []);
        $coverId = $request->input('cover_id');
        foreach($orders as $imageId => $sort){
            $img = ProductImage::where('product_id',$product->id)->where('id',$imageId)->first();
            if($img){ $img->update(['sort_order' => (int)$sort]); }
        }
        if($coverId){
            ProductImage::where('product_id',$product->id)->update(['is_cover'=>false]);
            $img = ProductImage::where('product_id',$product->id)->where('id',$coverId)->first();
            if($img){ $img->update(['is_cover'=>true]); }
        }
        return back();
    }
}