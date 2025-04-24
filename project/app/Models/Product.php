<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    public function user(): BelongsToMany
    {
        // вернутся пары айдишников вида user.id и product.id
        // можно использовать withPivot чтобы вывести что-то еще
        return $this->belongsToMany(User::class);//->withPivot(['created_at']);
    }

    public function latestUser(): HasOne
    {
        return $this->hasOne(Product::class)->latestOfMany();
    }

    public function oldestUser(): HasOne
    {
        return $this->hasOne(Product::class)->oldestOfMany();
    }
}
