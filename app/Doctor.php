<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

    protected $table = 'doctor';
    public $timestamps = true;


    public function feedbacks(){
        return $this->hasMany('App\Feedback');

    }
    public function articles(){
        return $this->hasMany('App\Article');

    }
    public function sessions(){
        return $this->hasMany('App\Session');

    }

    public function photos() {

        return $this->morphMany('App\Models\Photo','imageable' );

    }
}
