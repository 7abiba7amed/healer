<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

    protected $table = 'patient';
    public $timestamps = true;



    public function posts(){
        return $this->hasMany('App\Post');

    }
    public function comments(){
        return $this->hasMany('App\Comment');

    }
    public function feedbacks(){
        return $this->hasMany('App\Feedback');

    }

    public function photos() {

        return $this->morphMany('App\Models\Photo','imageable' );

    }
}
