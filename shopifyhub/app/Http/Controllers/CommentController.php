<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function get_all()
    {
        $comments = Comment::all();
        return view("admin.comment.index", [
            "comments" => $comments
        ]);
    }

    function admin_delete($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect("/admin/comment");
    }
}
