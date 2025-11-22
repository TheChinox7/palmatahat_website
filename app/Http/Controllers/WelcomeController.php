<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Show the application welcome page.
     *
     * @return \Illuminate\View\View
     */
    public function welcome()
    {
        $recentProducts = \App\Models\Product::with(['category','images'])
            ->orderByDesc('id')
            ->take(6)
            ->get();
        return view('welcome', compact('recentProducts'));
    }
    public function shop()
    {
        $query = \App\Models\Product::with(['category','images','attributeValues.option','attributeValues.attribute'])->orderByDesc('id');
        $categorySlug = request('category');
        if ($categorySlug) {
            $category = \App\Models\Category::where('slug', $categorySlug)->first();
            if ($category) {
                $query->where('category_id', $category->id);
            }
        }
        $minPrice = request('min_price');
        $maxPrice = request('max_price');
        if ($minPrice !== null && $minPrice !== '') { $query->where('price', '>=', (float) $minPrice); }
        if ($maxPrice !== null && $maxPrice !== '') { $query->where('price', '<=', (float) $maxPrice); }

        $attrFilters = request('attr', []);
        foreach ((array) $attrFilters as $attrId => $optionIds) {
            $ids = array_values(array_filter(array_map('intval', (array) $optionIds)));
            if (!empty($ids)) {
                $query->whereHas('attributeValues', function($q) use ($attrId, $ids) {
                    $q->where('attribute_id', (int) $attrId)->whereIn('attribute_option_id', $ids);
                });
            }
        }
        $search = trim((string) request('search'));
        if($search !== ''){
            $query->where(function($q) use ($search){
                $q->where('name','like','%'.$search.'%')
                  ->orWhere('description','like','%'.$search.'%');
            });
        }
        $sort = request('sort');
        switch ($sort) {
            case 'price_asc': $query->orderBy('price','asc'); break;
            case 'price_desc': $query->orderBy('price','desc'); break;
            case 'name_asc': $query->orderBy('name','asc'); break;
            case 'name_desc': $query->orderBy('name','desc'); break;
            default: $query->orderBy('id','desc'); break;
        }

        $perPage = (int) (request('per_page') ?? 12);
        if ($perPage < 6) $perPage = 6; if ($perPage > 48) $perPage = 48;

        $products = $query->paginate($perPage);
        $attributes = \App\Models\Attribute::with('options')->orderBy('name')->get();
        $categories = \App\Models\Category::orderBy('name')->get();
        $globalMin = (float) (\App\Models\Product::min('price') ?? 0);
        $globalMax = (float) (\App\Models\Product::max('price') ?? 0);
        return view('shop', compact('products','attributes','categories','minPrice','maxPrice','attrFilters','sort','perPage','globalMin','globalMax','search'));
    }

    public function shopList()
    {
        $query = \App\Models\Product::with(['category','images','attributeValues.option','attributeValues.attribute']);
        $categorySlug = request('category');
        if ($categorySlug) {
            $category = \App\Models\Category::where('slug', $categorySlug)->first();
            if ($category) { $query->where('category_id', $category->id); }
        }
        $minPrice = request('min_price');
        $maxPrice = request('max_price');
        if ($minPrice !== null && $minPrice !== '') { $query->where('price', '>=', (float) $minPrice); }
        if ($maxPrice !== null && $maxPrice !== '') { $query->where('price', '<=', (float) $maxPrice); }
        $attrFilters = request('attr', []);
        foreach ((array) $attrFilters as $attrId => $optionIds) {
            $ids = array_values(array_filter(array_map('intval', (array) $optionIds)));
            if (!empty($ids)) {
                $query->whereHas('attributeValues', function($q) use ($attrId, $ids) {
                    $q->where('attribute_id', (int) $attrId)->whereIn('attribute_option_id', $ids);
                });
            }
        }
        $search = trim((string) request('search'));
        if($search !== ''){
            $query->where(function($q) use ($search){
                $q->where('name','like','%'.$search.'%')
                  ->orWhere('description','like','%'.$search.'%');
            });
        }
        $sort = request('sort');
        switch ($sort) {
            case 'price_asc': $query->orderBy('price','asc'); break;
            case 'price_desc': $query->orderBy('price','desc'); break;
            case 'name_asc': $query->orderBy('name','asc'); break;
            case 'name_desc': $query->orderBy('name','desc'); break;
            default: $query->orderBy('id','desc'); break;
        }
        $perPage = (int) (request('per_page') ?? 12);
        if ($perPage < 6) $perPage = 6; if ($perPage > 48) $perPage = 48;
        $products = $query->paginate($perPage);
        return view('partials.product_cards', compact('products'));
    }

    public function productShow($slug)
    {
        $product = \App\Models\Product::with(['images','category','attributeValues.option','attributeValues.attribute'])->where('slug', $slug)->firstOrFail();
        return view('product-show', compact('product'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }

    public function montecristi()
    {
        // Retorna la vista correspondiente a la ruta /montecristi
        return view('montecristi');
    }

    public function histoire()
    {
        // Retorna la vista correspondiente a la ruta /histoire
        return view('histoire');
    }

    public function bandes()
    {
        // Retorna la vista correspondiente a la ruta /bandes
        return view('bandes');
    }

    public function processus()
    {
        // Retorna la vista correspondiente a la ruta /processus
        return view('processus');
    }

    public function faq()
    {
        // Retorna la vista correspondiente a la ruta /faq
        return view('faq');
    }

    public function origine()
    {
        // Retorna la vista correspondiente a la ruta /origine
        return view('origine');
    }

    public function commentCommander()
    {
        // Retorna la vista correspondiente a la ruta /comment-commander
        return view('comment-commander');
    }

    public function artPorterPreserver()
    {
        // Retorna la vista correspondiente a la ruta /art-porter-preserver
        return view('art-porter-preserver');
    }

    public function chapeauxMontecristi()
    {
        // Retorna la vista correspondiente a la ruta /chapeaux-montecristi
        return view('chapeaux-montecristi');
    }

    public function histoirePalmatahat()
    {
        // Retorna la vista correspondiente a la ruta /histoire-palmatahat
        return view('histoire-palmatahat');
    }

    public function bandesChapeaux()
    {
        // Retorna la vista correspondiente a la ruta /bandes-chapeaux
        return view('bandes-chapeaux');
    }

}
