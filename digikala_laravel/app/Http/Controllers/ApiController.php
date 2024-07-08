<?php
// ApiController.php
namespace App\Http\Controllers;

use App\Http\Kernel;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ApiController extends Controller
{
    public function getProducts()
    {
        $products = Product::all();
        return response()->json(
            $products,
            200
            //, ['content-type' => 'application/json:charset=utf-8']
            ,
            // JSON_UNESCAPED_UNICODE
        );
    }

    public function getCategories()
    {
        $categories = Category::all();
        return response()->json(
            $categories,
            200
            //, ['content-type' => 'application/json:charset=utf-8']
            ,
            // JSON_UNESCAPED_UNICODE
        );
    }
}