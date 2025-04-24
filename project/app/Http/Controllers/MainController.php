<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(): void
    {
        // получают как при <select * from products>, но дополнительно есть users_count
        $products = Product::query()->withCount('users')->get();
        dd($products->toArray());
    }
    public function hasMany(): void
    {
        $product = Product::query()->find(5);
        dd($product->users->toArray());
        // можно использовать $product->users()->get(),
        // тогда будут доступны методы квери билдера
        // т.е. можно конфигурировать запрос
    }

    public function belongsTo(): void
    {
        $user = User::query()->find(4);
        dd($user->product());
    }

}
