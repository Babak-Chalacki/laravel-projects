<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    function add_comment(Request $request)
    {
        // $comment = new Comment();
        // $comment->user_id = Auth::user()->id;
        // $comment->product_id = $request->product_id;
        // $comment->comment = $request->comment;
        // $comment->save();
        return $request->comment;
        // return "ok";
    }
    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->user_id = Auth::id();
        $comment->product_id = $request->input('product_id');
        $comment->text = $request->input('text');
        $comment->save();

        return response()->json(['message' => 'Comment added successfully']);
    }
}
