<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    function show_orders()
    {
        $orders = Order::all();
        return view('admin.order.index', ['orders' => $orders]);
    }
}
