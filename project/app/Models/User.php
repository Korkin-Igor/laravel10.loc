<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Model
{
    use HasFactory;

    // временные метки в таблице отсутствуют
    public $timestamps = false;

    // заполняемые поля
    protected $fillable = ['name', 'email', 'password', 'product_id'];

    public function isAdmin()
    {
        if ($this->email == 'admin@admin.com') {
            return true;
        } return false;
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
