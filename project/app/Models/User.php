<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // временные метки в таблице отсутствуют
    public $timestamps = false;

    // заполняемые поля
    protected $fillable = ['name', 'email', 'password', 'product_id'];
}
