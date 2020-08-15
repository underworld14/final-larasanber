<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionComment extends Model
{
    protected $fillable = [
        'question_id', 'content', 'created_by', 
    ];

    public function question() 
    {
        return $this->belongsTo('App\Question');
    }

    public function user() 
    {
        return $this->belongsTo('App\User', 'created_by');
    }
}
