<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Articles extends Model
{
    protected $fillable = [
        'title', 'body', 'user',
    ];
  
 

    public function user(){
        return $this->belongsTo('App\User');
    }
}
