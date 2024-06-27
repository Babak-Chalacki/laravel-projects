<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use App\Models\Category;
use App\Models\Comment;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function get()
    {
        return view('product');
    }

    public function get_all()
    {
        $products = Product::all();
        return view("index", [
            'products' => $products,

        ]);
    }
    public function show_product($id)
    {
        $comments = Comment::where('product_id', $id)->get();
        $product = Product::with('images')->find($id);
        $productss = Product::all();
        return view('product', [
            'product' => $product, "productss" => $productss, "comments" => $comments
        ]);
    }


    function admin_get()
    {
        $products = Product::all();
        return view("admin.product.index", [
            'products' => $products
        ]);
    }

    function admin_insert_product()
    {
        $categories = Category::all();
        return view("admin.product.insert", [
            "categories" => $categories
        ]);
    }

    function admin_add_product(Request $request)
    {
        $product = new Product();
        $product->name = $request["name"];
        $product->price =  $request["price"];
        $product->price_off = $request["price_off"];
        $product->count =  $request["count"];
        $product->description =  $request["description"];
        $product->category_id =  $request["Category_id"];
        $product->save();
        $image = new Image();
        $image->url = $request->image;
        $product->images()->save($image);
        return redirect('/admin/product');
    }
    function admin_get_prosuct($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        return view("admin.product.edit", [
            "product" => $product, "categories" => $categories
        ]);
    }

    function admin_product_edit()
    {
        $product_id = request("id");
        $product = Product::find($product_id);
        $product->name = request("name");
        $product->price = request("price");
        $product->price_off = request("price_off");
        $product->count = request("count");
        $product->description = request("description");
        $product->category_id = request("Category_id");
        $product->save();
        return redirect('/admin/product');
    }

    function admin_delete_prosuct()
    {
        $product_id = request("id");
        $product = Product::find($product_id);
        $product->delete();
        return redirect('/admin/product');
    }
}