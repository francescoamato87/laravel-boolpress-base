<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoPost extends Model
{
    /** diciamo a Laravel di non gestire date create e update_at
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    // DB RELATION
    // **info_post <-> post

    public function post() {
        return $this->belongsTo('App\Post');
    }
}

