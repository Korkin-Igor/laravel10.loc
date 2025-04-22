<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function index(Request $request)
    {
        $users = DB::table('users')->get(['id', 'name', 'email']);
        $productsWithPriceLower700 = DB::table('products')->get(['title'])
            ->where('price', '<', 700);
        $products = DB::table('products')->get(['title', 'price'])
            ->sortBy('price');
        $products = DB::table('products')
            ->orderByDesc('id')
            ->get(['title', 'price']);
    }
}
