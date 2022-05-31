<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor_info extends Model
{

    protected $table = 'doctor_info';
    public $timestamps = false;

    protected $fillable=[
        'info',

    ];
}
