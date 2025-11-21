<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart', []);
        return view('partials.cart_items', ['cart' => $cart]);
    }

    public function add(Request $request)
    {
        $validated = $request->validate([
            'product_id' => ['required','exists:products,id'],
            'quantity' => ['nullable','integer','min:1'],
        ]);
        $product = Product::findOrFail($validated['product_id']);
        $qty = $validated['quantity'] ?? 1;
        $cart = $request->session()->get('cart', []);
        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] += $qty;
        } else {
            $cart[$product->id] = [
                'product_id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'image_path' => $product->image_path,
                'quantity' => $qty,
            ];
        }
        $request->session()->put('cart', $cart);
        return response()->json(['count' => $this->count($cart)]);
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