<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'category';
    public $timestamps = false;


    protected $fillable=[
        'name'
    ];
    public function posts(){

        $this->hasMany('App\Post');
    }

    public function articles(){

        $this->hasMany('App\Article');
    }
}
