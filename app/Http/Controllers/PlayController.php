<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Question;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PlayController extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($category=null)
    {
        $id = \Auth::id();
        $answered_questions = \DB::table('question_user')->where('user_id','=',$id)
                                                ->get(array('question_id'));
        $answered_questions = json_decode(json_encode($answered_questions), true);
        $categories = ['history','sports','science','literature','politics'];
        if($category == null){
            $question = Question::eligible($id,$answered_questions)
                                  ->get()->toArray();
        }else if(in_array($category,$categories)) {
            $question = Question::where('category','=',$category)
                                ->eligible($id,$answered_questions)
                                ->get()->toArray();
        }
        else{
            \Session::flash('heading','Oops!!');
            \Session::flash('message','You are trying to access a wrong category');
            return redirect('/');
        }
        return view('play.index',compact('question'));
    }

    public function validateAnswer(Request $request,$id)
    {
        $this->validate($request,['answer'=>'required|in:A,B,C,D']);
        $answer = $request->answer ;
        $data =[];
        $question = Question::find($id);
        if(!\Auth::user()->answeredQuestions->contains($question->id)) {
            \Auth::user()->answeredQuestions()->attach($question->id);
            $data['answer'] = $question->answer;
            if ($question->answer == $answer) {
                $data['correct'] = true;
                $data['score'] = \Auth::user()->score += $question->difficulty_rating;
            } else {
                $data['score'] = \Auth::user()->score -= 1;
            }
            \Auth::user()->save();
        }
        return  \Response::json($data);
    }
}


