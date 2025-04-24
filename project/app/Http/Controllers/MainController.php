<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;

class MainController extends Controller
{
    public function index(): void
    {
        $product = Product::query()->find(2);
        $user = $product->user;
        dump($user->toArray());
    }

    public function latestUser()
    {
        return Product::query()->find(4)->latestUser;
    }
}
