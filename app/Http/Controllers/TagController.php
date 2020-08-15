<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::get();

        return view('tags.tags', compact('tags'));
    }

    public function show(Tag $tag)
    {
        return view('question.question', [
            'tagname' => $tag->name,
            'questions' => $tag->questions()->orderBy('created_at', 'desc')->get(),
        ]);
    }
}
