<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function index(Request $request)
    {
        $cities = DB::table('cities')->select('ID', 'Name')
            ->where('Name', 'like', '%a%')->get();
        $results = DB::table('users')
            ->join('posts', 'users.id', '=', 'posts.user_id')
            ->select('users.name', 'posts.title')
            ->get();
        $results = DB::table('orders')
            ->select('customer_id', DB::raw('COUNT(*) as total_orders'))
            ->groupBy('customer_id')
            ->having('total_orders', '>', 5)
            ->get();
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => bcrypt('password123'),
        ]);
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => bcrypt('password123'),
        ]);
        DB::table('users')
            ->where('id', 1)
            ->delete();
    }
}
