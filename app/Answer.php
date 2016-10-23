<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable =['question_id','body','votes','views'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function answers()
    {
        return $this->belongsTo(Answer::class);
    }
}
