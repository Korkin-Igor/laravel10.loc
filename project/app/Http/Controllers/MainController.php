<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;

class MainController extends Controller
{
    public function index(): string
    {
        $product = new Product([
            'id' => 7,
            'title' => 'product7',
            'description' => 'glorbo frutto greeno',
            'price' => 500
        ]);

        $user = User::find(1);
        $user->product()->save($product);

        // ->associate($user) для переопределения значения FK
        // ->dissociate($user) для обнуления FK
        return 'Success';
    }
}
