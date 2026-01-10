<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return response()->json($products);
    }

    public function show($id) {
        $products = Product::find($id);
        if($products) {
            return response()-> json($products);
        } else {
            return response() ->json (['message' => 'Producto no encontrado']);
        }
    }
}
