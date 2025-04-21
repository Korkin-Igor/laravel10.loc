<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{


    public function index(Request $request): string
    {
        return response()->json(['message' => 'All products'])->getContent();
    }

    public function addProduct(Request $request, $id = 0): string
    {
        return response()->json(['message' => "Product $id added"])
            ->setStatusCode(201);

    }

}
