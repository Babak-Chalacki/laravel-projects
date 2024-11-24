<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    function profile()
    {
        return view("client.profile");
    }
    function login_get()
    {
        return view('client.login');
    }

    function login_post(Request $request)
    {
        $request->validate([
            'ume_of_user' => 'required',
            'password' => 'required|min:5',
        ]);

        $ume_of_user = $request->input('ume_of_user');
        $password = $request->input('password');

        // Check if the ume_of_user is an email
        if (filter_var($ume_of_user, FILTER_VALIDATE_EMAIL)) {
            $credentials = ['email' => $ume_of_user, 'password' => $password, "role" => 0,];
        }
        // Check if the ume_of_user is a mobile number
        elseif (preg_match('/\d*/', $ume_of_user)) {
            $credentials = ['mobile_number' => $ume_of_user, 'password' => $password, "role" => 0,];
        }
        // Assume it's a username
        elseif ($credentials = ['username' => $ume_of_user, 'password' => $password, "role" => 0,]) {
            return view('/');
        }

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return redirect("/profile")->with([
                "message" => "You are logged in successfully",
                "user" => $user
            ]);
        } else {
            return redirect("/login")->with([
                "message" => "Invalid ume_of_user or password"
            ]);
        }
    }


    function register_get()
    {
        $cities = City::all();
        return view("client.register", [
            'cities' => $cities
        ]);
    }

    function register_post(Request $request)
    {
         $this->validate($request, [
             'name' => 'required',
             'email' => 'required|email|unique:users',
             'username' => 'required|unique|max:12',
             'password' => 'required|min:8',
             'city_id' => 'required',
             'phone' => 'required',
         ]);
        $new_user = new User();
        $new_user->name = $request->name;
        $new_user->username = $request->username;
        $new_user->email = $request->email;
        $new_user->password = bcrypt($request->password);
        $new_user->city_id = $request->city_id;
        $new_user->address = $request->address;
        $new_user->mobile_number = $request->mobile_number;
        $new_user->save();
        return view('client.login');
    }



    function logout()
    {
        // session()->forget('user');
        Auth::logout();
        return redirect()->back();
    }


    function show_users()
    {
        $users = User::all();
        return view('admin.user.index', ['users' => $users]);
    }

    function delete($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->orders()->delete();
            $user->Comments()->delete();
            $user->delete();
            return redirect('/admin/user');
        }
    }
}
