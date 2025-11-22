<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function show(Request $request)
    {
        $cart = $request->session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('shop');
        }
        $attrIds = [];
        foreach ($cart as $item) {
            $attrs = $item['attributes'] ?? [];
            foreach (array_keys($attrs) as $aid) {
                $aid = (int) $aid;
                if ($aid) $attrIds[$aid] = true;
            }
        }
        $attrNames = \App\Models\Attribute::whereIn('id', array_keys($attrIds))->pluck('name','id')->toArray();
        return view('checkout', ['cart' => $cart, 'attrNames' => $attrNames]);
    }

    public function process(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('register');
        }

        $cart = $request->session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('shop');
        }

        $total = 0;
        foreach ($cart as $item) {
            $total += ((float) $item['price']) * ((int) $item['quantity']);
        }

        $order = Order::create([
            'user_id' => Auth::id(),
            'status' => 'pending',
            'total' => $total,
            'email' => Auth::user()->email,
        ]);

        foreach ($cart as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        $request->session()->forget('cart');

        return redirect()->route('orders.show', $order);
    }
}
