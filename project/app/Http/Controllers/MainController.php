<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function index()
    {
        // dd(Models\Product::query()->get()->toArray());
        return Models\Order::query()->get()->toArray()[0];
    }
}
