<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Payment;
use App\Http\Requests\CheckoutRequest;

class CheckoutController extends Controller
{
    public function show() {
        $cart = Cache::get('cart_user_' . Auth::id(), []);

        $total = array_reduce($cart, function ($sum, $item) {
            return $sum + $item['price'] * $item['quantity'];
        }, 0);

        return view('checkout.index', compact('cart', 'total'));
    }

    public function pay(CheckoutRequest $request)
    {
        $cart = Cache::get('cart_user_' . Auth::id(), []);

        if (empty($cart)) {
            return redirect()->route('cart')
                ->with('error', 'Cart is empty');
        }

        $total = collect($cart)->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });

        $order = Order::create([
            'user_id' => Auth::id(),
            'total_amount' => $total,
            'status' => 'paid',
        ]);

        foreach ($cart as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);

            Product::where('id', $item['id'])
                ->decrement('stock', $item['quantity']);
        }

        Payment::create([
            'order_id' => $order->id,
            'amount' => $total,
            'payment_method' => $request->payment_method, 
            'status' => 'paid',
        ]);

        Cache::forget('cart_user_' . Auth::id());

        return redirect()->route('checkout.success', $order);
    }

    public function success(Order $order) {
        return view('checkout.success', compact('order'));
    }
}
