<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function hasOne()
    {
        $product = Product::query()->find(5);
        dd($product->user->toArray());
    }

    public function belongTo()
    {
        $user = User::query()->find(4);
        dd($user->product());
    }
}
