<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //MASS ASSIGN
    protected $fillable = [
        'title',
        'body',
        'slug',
        'path_img'
    ];

    // DB RELATION
    // **post <-> info_posts

    public function infoPost() {
        return $this->hasOne('App\InfoPost');
    }

    // post <--->comments
      public function comments() {
        return $this->hasMany('App\Comment');
    }

}
