<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{

    protected $table = 'feedback';
    public $timestamps = true;

    protected $fillable=[
        'content',
        'rate'
    ];
}
