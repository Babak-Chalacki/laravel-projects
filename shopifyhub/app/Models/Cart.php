<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function product()
    {
        // return $this->belongsToMany(Product::class)->withPivot('quantity');
        return $this->belongsTo(Product::class);
    }
}
