<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function index(Request $request)
    {
        /*
        // ORM
        dump(User::query()->get()->where('id', 4));

        // query builder
        dump(DB::table('users')->get()->where('id', 4));

        // нативный sql
        dump(DB::select('select * from users where id = ?', [4]));
        */

        /* работа с коллекциями|массивами

        $data = [1, 2, 3, 4, 5];
        $data = collect($data);
        dump($data)
        $data = $data->toArray();
        dump($data)

        коллекции в laravel имеют очень много методов
        */

        $workers = [
            ['name' => 'John Doe', 'email' => 'john@doe.com', 'salary' => 2000],
            ['name' => 'James Moe', 'email' => 'qwer@qwer.com', 'salary' => 5000],
            ['name' => 'Bob Hill', 'email' => 'lol@kek.com', 'salary' => 1500],
            ['name' => 'Ken Pall', 'email' => 'laravel@mail.com', 'salary' => 3000],
        ];

        $workers = collect($workers);
        // dd($workers->avg('salary'));
        // dd($workers->count());
        // dd($workers->max('salary'));
        // dd($workers->max('salary'));
        // dd($workers->sum('salary'));
    }
}
