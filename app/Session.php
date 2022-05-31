<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{

    protected $table = 'session';
    public $timestamps = true;


    protected $fillable=[
        'date_time',
    ];
}
