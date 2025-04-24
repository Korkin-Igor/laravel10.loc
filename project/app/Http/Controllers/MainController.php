<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function create(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:1000'],
            'price' => ['required', 'integer'],
        ]);

        $product = new Product([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price
        ]);

        $product->save();
        return response()->json($product)->setStatusCode(201);
    }

    public function get(Request $request)
    {
        $valiadated = $request->validate([
            'id' => ['required', 'integer', 'exists:products,id'],
        ]);

        $product = Product::query()->find($request->id);
        return response()->json($product);
    }
}
