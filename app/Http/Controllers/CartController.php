<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart', []);
        $attrIds = [];
        foreach ($cart as $item) {
            $attrs = $item['attributes'] ?? [];
            foreach (array_keys($attrs) as $aid) {
                $aid = (int) $aid;
                if ($aid) $attrIds[$aid] = true;
            }
        }
        $attrNames = \App\Models\Attribute::whereIn('id', array_keys($attrIds))->pluck('name','id')->toArray();
        return view('partials.cart_items', ['cart' => $cart, 'attrNames' => $attrNames, 'showCheckoutButton' => true]);
    }

    public function view(Request $request)
    {
        $cart = $request->session()->get('cart', []);
        $attrIds = [];
        foreach ($cart as $item) {
            $attrs = $item['attributes'] ?? [];
            foreach (array_keys($attrs) as $aid) {
                $aid = (int) $aid;
                if ($aid) $attrIds[$aid] = true;
            }
        }
        $attrNames = \App\Models\Attribute::whereIn('id', array_keys($attrIds))->pluck('name','id')->toArray();
        return view('cart', ['cart' => $cart, 'attrNames' => $attrNames]);
    }

    public function add(Request $request)
    {
        $validated = $request->validate([
            'product_id' => ['required','exists:products,id'],
            'quantity' => ['nullable','integer','min:1'],
            'attributes' => ['nullable','array'],
        ]);
        $product = Product::findOrFail($validated['product_id']);
        $cover = $product->coverImage();
        $imagePath = $cover ? $cover->path : ($product->image_path ?? null);
        $qty = $validated['quantity'] ?? 1;
        $attrs = $validated['attributes'] ?? [];
        $cart = $request->session()->get('cart', []);
        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] += $qty;
            $cart[$product->id]['attributes'] = $attrs;
        } else {
            $cart[$product->id] = [
                'product_id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'image_path' => $imagePath,
                'quantity' => $qty,
                'attributes' => $attrs,
            ];
        }
        $request->session()->put('cart', $cart);
        return response()->json(['count' => $this->count($cart)]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'product_id' => ['required','exists:products,id'],
            'quantity' => ['required','integer','min:1'],
        ]);
        $cart = $request->session()->get('cart', []);
        $pid = (int) $validated['product_id'];
        $qty = (int) $validated['quantity'];
        if(isset($cart[$pid])){
            $cart[$pid]['quantity'] = $qty;
            $request->session()->put('cart', $cart);
            return response()->json(['count' => $this->count($cart)]);
        }
        return response()->json(['count' => $this->count($cart)], 200);
    }

    public function remove(Request $request)
    {
        $validated = $request->validate([
            'product_id' => ['required','integer'],
        ]);
        $cart = $request->session()->get('cart', []);
        unset($cart[$validated['product_id']]);
        $request->session()->put('cart', $cart);
        return response()->json(['count' => $this->count($cart)]);
    }

    public function clear(Request $request)
    {
        $request->session()->forget('cart');
        return response()->json(['count' => 0]);
    }

    private function count(array $cart): int
    {
        return array_sum(array_map(fn($i) => (int) $i['quantity'], $cart));
    }
}
