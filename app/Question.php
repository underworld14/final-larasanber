<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Question extends Model
{
    protected $fillable = [
        'title', 'content', 'created_by', 'correct_answer'
    ];

    public function user() 
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    public function tags() 
    {
        return $this->belongsToMany('App\Tag');
    }

    public function answers() 
    {
        return $this->hasMany('App\Answer');
    }

    public function comments() 
    {
        return $this->hasMany('App\QuestionComment');
    }

    public function votes()
    {
        return $this->hasMany('App\QuestionVote');
    }
}
