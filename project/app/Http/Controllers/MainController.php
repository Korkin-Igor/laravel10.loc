<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function index(Request $request)
    {
        $result = DB::select('select * from products where id = ?', [$request->route('id')]);
        return response()->json($result);
    }

    public function addProduct(Request $request)
    {
        DB::insert('insert into products (title, description, price) values (?, ?, ?)', [$request->route('title'), $request->route('description'), $request->route('price')]);
        return response()->json('Product added successfully', 201);
    }

    public function updateProductPrice(Request $request)
    {
        DB::update('update products set price = ? where id = ?', [$request->route('price'), $request->route('id')]);
        return response()->json('Product updated successfully', 201);
    }

    public function deleteProduct(Request $request)
    {
        DB::delete('delete from products where id = ?', [$request->route('id')]);
        return response()->json('Product deleted successfully', 201);
    }

}
