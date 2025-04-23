<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function create(Request $request): string
    {
        User::query()->create($request->all());
        return 'АЙЛЕВТИРГ';
    }
    public function read(Request $request)
    {
        $user = User::query()
            ->get()
            ->where('id', $request->get('id'));
        return $user;
    }
    public function update(Request $request): string
    {
        $user = User::query()->find($request->get('id'));
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->product_id = $request->get('product_id');
        $user->save();
        return 'АЙЛЕВТИРГ';
    }
    public function delete(Request $request): string
    {
        $user = User::query()->find($request->get('id'));
        $user->delete();
        return 'АЙЛЕВТИГР';
    }
}
