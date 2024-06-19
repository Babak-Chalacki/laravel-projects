<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
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
            $user->delete();
            return redirect('/admin/user');
        }
    }
}