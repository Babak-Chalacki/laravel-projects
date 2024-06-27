<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminController extends Controller
{
    function index()
    {
        return view("admin.dashbord");
    }

    function login_get()
    {
        return view("admin.login");
    }
    function login_post(Request $request)
    {
        $this->validate($request, [
            "username" => "required",
            "password" => "required"
        ]);
        if (Auth::attempt([
            "username" => $request->username,
            "password" => $request->password,
            "role" => 1,
            // $request["remember"]
        ])) {
            return redirect("/admin");
        } else {
            return redirect("/");
        }
    }
}
