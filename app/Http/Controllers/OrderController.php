<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Order;


class OrderController extends Controller
{
    public function myOrders() {
        $orders = auth()->user()
        ->orders()
        ->latest()
        ->get();

        return view('admin.orders.my-orders', compact('orders'));
    }

    public function cancel(Order $order) {
        if ($order->user_id !== auth()->id()) {
            abort(403);
        }

        if (!in_array($order->status, ['paid', 'pending'])) {
            return back()->with('error', 'This order cannot be cancelled.');
        }

        $order->update([
            'status' => 'cancelled'
        ]);

        return back()->with('success', 'Order cancelled successfully.');
        }
}