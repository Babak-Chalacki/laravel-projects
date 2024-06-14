<?php
namespace App\Http\Controllers;
use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;

class AddController extends Controller
{
    function add_new(Request $request)
    {
        $qestion = new Question();
        $qestion->name = $request["question"];
        $qestion->save();
        $id = Question::all()->last()->id;

        $true_answer = $request["correct"];

        foreach ($request["answer"] as $i=>$answer)
        {
            $answers = new Answer();

            if($i+1 == $true_answer){
                $is_true = 1;
            }
            else{
                $is_true = 0;
            }

            $answers->text = $answer;
            $answers->is_true = $is_true;
            $answers->question_id = $id;
            $answers->save();
        }
        return redirect("/");
    }
}