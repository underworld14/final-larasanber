<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionVote extends Model
{
    protected $fillable = [
        'user_id', 'question_id', 'like'
    ];

    public function question() 
    {
        return $this->belongsTo('App/Question');
    }

    public function user() 
    {
        return $this->belongsTo('App/User');
    }
}
