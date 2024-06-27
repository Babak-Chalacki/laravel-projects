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
    function add_comment(Request $request, $id)
    {
        $user = User::find($id);
        $product_id = $request->input('thisproduct_id');
        $product = Product::find($product_id);
        $comment = new Comment();
        $comment->user_id = $id;
        $comment->product_id = $product_id;
        $comment->text = $request->input('comment');
        $comment->save();
        return redirect()->back();
        // Return a JSON response with the new comment and user information
        // return response()->json([
        //     'message' => 'Comment added successfully!',
        //     'comment' => $comment,
        //     'user' => $user
        // ]);
    }
}
