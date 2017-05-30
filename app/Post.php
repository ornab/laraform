<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $fillable = ['remember_token', 'title', 'content'];
    
    protected $hidden = [
         'remember_token',
    ];
}
