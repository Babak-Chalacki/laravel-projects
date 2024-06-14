<?php

namespace App\Http\Controllers;
use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class QuizzController extends Controller
{
    function index($id){
       $question =  Question::find($id);

       return view("question",[
        "question"=>$question
       ]);
    }

    function check(Request $request){
        $question_id = $request["question_id"];
        $user_choice_id = $request["answer"];
        $correct_choice_id = Answer::where("question_id", $question_id)->where("is_true", 1)->first()->id;

        if ($correct_choice_id == $user_choice_id) {
            $user_score = Session::get("user_score", 0); // از 0 برای مقدار پیشفرض استفاده می‌کنیم
            $user_score++; // اضافه کردن یک به نمره کاربر
            Session::put("user_score", $user_score);
            // echo $user_score;
        }

        $next_question_id = $question_id + 1;
        $total_questions = Question::count();

        if ($next_question_id <= $total_questions) {
            return redirect("/question/$next_question_id");
        } else {
            // function results(){
                return view("results");
            // }
        }
    }







}