<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::get();

        return $tags;
    }

    public function show(Tag $tag)
    {
        return $tag;
    }
}
