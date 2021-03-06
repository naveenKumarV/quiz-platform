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

    /**
     * Displays appropriate question to the user
     *
     * @param null $category
     * @return \Illuminate\Http\RedirectResponse|
     * \Illuminate\Routing\Redirector|\Illuminate\View\View
     */
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
        return view('play.index',compact('question','category'));
    }

    /**
     * Validates the answer
     *
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function validateAnswer(Request $request,$id)
    {
        $this->validate($request,['answer'=>'required|in:A,B,C,D']);
        $answer = $request->answer ;
        $data = [];
        $question = Question::find($id);
        if (!\Auth::user()->answeredQuestions->contains($question->id)) {
            $data['answered'] = false;
            $user_response = 'option_'.$answer;
            $correct_answer = 'option_'.$question->answer;
            \Auth::user()->answeredQuestions()->
            attach($question->id,array('user_response'=>$question->$user_response,
                                        'answer'=>$question->$correct_answer,
                                        'question'=>$question->question));
            $data['answer'] = $question->answer;

            if ($question->answer == $answer) {
                $data['correct'] = true;
                $data['score'] = \Auth::user()->score += $question->difficulty_rating;
            } else {
                $data['score'] = \Auth::user()->score -= 1;
            }
            \Auth::user()->save();
        }else{
            $data['answered'] = true;
        }
        return  \Response::json($data);
    }

    /**
     * Gets the user score
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function userScore()
    {
        return redirect('/')->with([
            'heading' => 'Hi '.\Auth::user()->name,
            'message' => 'Your score is '.\Auth::user()->score
            ]);
    }

    /**
     * Gives the scores of all users
     *
     * @return \Illuminate\View\View
     */
    public function displayScores()
    {
        $scores = User::orderBy('score','desc')->get(['username','score'])->toArray();
        for($i=0,$j=0;$i<count($scores);++$i)
        {
            if($i!=0 && $scores[$i-1]['score']==$scores[$i]['score']) {
                $scores[$i]['rank'] = $j;
            }else{
                $scores[$i]['rank'] = ++$j;
            }
        }
        return view('leaderboard',compact('scores'));
    }

    /**
     * Get answered questions of the authenticated users
     *
     * @return \Illuminate\View\View
     */
    public function answered()
    {
        $answered_questions = \Auth::user()->answeredQuestions()->get()->toArray();
        return view('play.answered',compact('answered_questions'));
    }
}


