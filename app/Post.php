<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'post';
    public $timestamps = true;


    protected $fillable=[
        'content',
        //'category_id',

    ];
    public function comments(){
        return $this->hasMany('App\Comment');

    }
}
