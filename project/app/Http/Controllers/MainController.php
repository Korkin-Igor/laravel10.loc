<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function create(StoreProductRequest $request)
    {
        $product = new Product([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price
        ]);

        $product->save();
        return response()->json($product)->setStatusCode(201);
    }

    public function getProduct(Request $request)
    {
        $validated = $request->validate([
            'id' => ['required', 'integer', 'exists:products,id'],
        ]);

        $product = Product::query()->find($request->id);
        return response()->json($product);
    }
}
