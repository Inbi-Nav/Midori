<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index() {
        $orders= Order::all();
        return response()-> json($orders);
    }

    public function show($id) {
        $orders= Order::find($id);
        if ($orders) {
            return response()->json ($orders);
        } else {
            return response()->json (['message' => 'pedido no encontrado'], 404);
        }
    }


    
}
