<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replys extends Model
{
    protected $fillable = [
        'reply', 'comment_id', 'user',
    ];
}
