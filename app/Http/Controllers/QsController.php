<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Http\Requests\StoreAnswer;
use App\Http\Requests\StoreQuestion;
use App\Http\Requests\StoreQuestionComment;
use App\Question;
use App\QuestionComment;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QsController extends Controller
{
    public function index()
    {
        $questions = Question::latest()->get();
        return view('question.question', compact('questions'));
    }

    public function create()
    {
        $tags = Tag::get();
        return view('question.create', compact('tags'));
    }

    public function store(StoreQuestion $request)
    {
        $question = new Question;
        $question->title = $request->title;
        $question->content = $request->content;
        $question->created_by = Auth::id();
        $question->save();

        $question->tags()->attach($request->tags);

        return redirect('/question')->with('status', 'Pertanyaan baru berhasil ditambahkan');
    }

    public function show(Question $question)
    {
        return view('question.detail', compact('question'));
    }

    public function edit(Question $question)
    {
        //
    }

    public function update(Request $request, Question $question)
    {
        //
    }

    public function destroy(Question $question)
    {
        //
    }

    public function createanswer(Question $question, StoreAnswer $request)
    {
        $answer = new Answer([
            'content' => $request->content,
            'created_by' => Auth::id(),
        ]);
        $question->answers()->save($answer);

        return back()->with('status', 'berhasil menambahkan jawaban !');
    }

    public function createcomment(Question $question, StoreQuestionComment $request) 
    {
        $comment = new QuestionComment([
            'content' => $request->content,
            'created_by' => Auth::id(),
        ]);
        $question->comments()->save($comment);

        return back()->with('status', 'berhasil menambahkan comment !');
    }
}
