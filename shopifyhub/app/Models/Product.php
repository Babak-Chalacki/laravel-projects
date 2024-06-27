<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    public function stars()
    {
        return $this->hasMany(Star::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function orders()
    {
        // return $this->belongsToMany(Order::class);
        return $this->hasMany(Order::class);
        // return $this->belongsTo(Order::class);
    }
    public function carts()
    {
        // return $this->belongsToMany(Order::class);
        return $this->hasMany(Cart::class);
    }
    public function imformations()
    {
        return $this->hasMany(Information::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
