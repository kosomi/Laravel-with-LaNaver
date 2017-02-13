<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth; 

class Stores extends Model
{
    protected $fillable = [
        'name', 'memo', 'phone', 'address', 'lat', 'lng', 'image', 'user',
    ]; 

    public function user(){
        return $this->belongsTo('App\User');
    }
} 


 