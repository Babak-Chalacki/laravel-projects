<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use App\Models\Category;

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
        // $products = Product::with('images')->get();
        // $images = Image::with('product')->get();
        // return view("index", compact('products', 'images'));
        $products = Product::all();
        return view("index", [
            'products' => $products
        ]);
    }
    public function show_product($id)
    {
        $productss = Product::all();
        $products = Product::with('images')->find($id);
        return view('product', [
            'product' => $products, "productss" => $productss
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
