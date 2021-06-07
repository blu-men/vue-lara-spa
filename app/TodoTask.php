<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoTask extends Model
{
    protected $fillable = [
        'title',
        'content',
        'evaluation',
        'comment'
    ];
}
