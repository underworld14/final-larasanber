<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerComment extends Model
{
    protected $fillable = [
        'answer_id', 'content', 'created_by', 
    ];

    public function answer() 
    {
        return $this->belongsTo('App\Answer');
    }

    public function user() 
    {
        return $this->belongsTo('App\User', 'created_by');
    }
}
