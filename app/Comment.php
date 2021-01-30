<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // DB RELATIONS comments-post

    public function post() {
        return $this->belongsTo('App\Post');
    }
}
