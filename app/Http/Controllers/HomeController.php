<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('welcome');
    }


    function about_us(){
        return view('about_us');
        }
            function download(){
                return view('download');
            }

}