<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuestion;
use App\Question;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
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
        dd($question);

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
}
