<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerVote extends Model
{
    protected $fillable = [
        'user_id', 'answer_id', 'like'
    ];

    public function answer() 
    {
        return $this->belongsTo('App\Answer');
    }

    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
