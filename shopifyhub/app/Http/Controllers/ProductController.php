<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function get()
    {
        return view('product');
    }
    function add()
    {
    }
    function edit()
    {
    }
    function delete()
    {
    }
    public function get_all()
    {
        $products = Product::with('images')->get();
        $images = Image::with('product')->get();

        return view("index", compact('products', 'images'));
    }
    public function show_product($id)
    {
        $products = Product::with('images')->find($id);
        return view('product', ['product' => $products]);
    }

    function get_by_category()
    {
    }
}
