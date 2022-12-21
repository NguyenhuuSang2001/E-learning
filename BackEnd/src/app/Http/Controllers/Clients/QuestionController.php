<?php

namespace App\Http\Controllers\Clients;

use Illuminate\Http\Request;
use App\Models\Clients\Question;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $questions;
    public function __construct()
    {
        $this->questions = new Question();
    }
    public function index()
    {
        return view('client.create-question');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create-question');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $data = [
            'user_id' => session()->get('user_id'),
            'level' => $request->get('level'),
            'content' => $request->get('content_question'),
            'answer_1' => $request->get('answer_1'),
            'answer_2' => $request->get('answer_2'),
            'answer_3' => $request->get('answer_3'),
            'answer_4' => $request->get('answer_4')
        ];
        // dd($data);
        $this->questions->addQuestion($data);
        return view('client.create-question');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
