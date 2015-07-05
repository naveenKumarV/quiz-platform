<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Question;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionRequest;

class QuestionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $questions = \Auth::user()->questions->toArray();
        return view('design.index',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('design.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param QuestionRequest $request
     * @return Response
     */
    public function store(QuestionRequest $request)
    {
        $question = new Question($request->all());
        \Auth::user()->questions()->save($question);
        return redirect('quiz/design')->with([
            'heading' => 'SUCCESS',
            'message' => 'You have successfully created the question'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $question = Question::findOrFail($id);
        if($question->user_id == \Auth::id()) {
            return view('design.edit', compact('question'));
        }else {
            return redirect('quiz/design')->with([
                'heading' => 'Oops',
                'message' => 'You are trying to access a restricted web page for which you
                              have no access'
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $id
     * @param QuestionRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id,QuestionRequest $request)
    {
        $question = Question::findOrFail($id);
        $question->update($request->all());
        return redirect('quiz/design')->with([
            'heading' => 'SUCCESS',
            'message' => 'You have successfully updated the question'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        if($question->user_id == \Auth::id()) {
            $question->delete();
            return redirect('quiz/design')->with([
                'heading' => 'SUCCESS',
                'message' => 'You have successfully deleted the question'
            ]);
        }else{
            return redirect('quiz/design')->with([
                'heading' => 'Oops',
                'message' => 'You are trying to access a restricted web page for which you
                              have no access'
            ]);
        }
    }
}
