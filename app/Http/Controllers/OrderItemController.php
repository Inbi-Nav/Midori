<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Database\Factories\OrderFactory;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function index() {
        $orderItems = OrderItem::all();
        return response()-> json($orderItems);
    }

    public function show($id) {
        $orderItems = OrderItem::find($id);
        if ($orderItems) {
            return response()->json ($orderItems);
        } else {
            return response() -> json(['message' => 'Item de pedido no encontrado'], 404);
        }
    }

    public function store(Request $request) {
        $orderItems =OrderItem::create([
            'order_id' => $request -> order_id,
            'product_id' => $request -> product_id,
            'quantity' => $request -> quantity,
            'price' => $request -> price,
        ]);
        return response() -> json($orderItems, 201);
    } 
}

