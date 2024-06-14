<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        Session::put("user_score",0);
        return view("index");
    }

    function add(){
        return view("add_new");
    }
}