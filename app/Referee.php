<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referee extends Model
{
    protected $fillable=[
        'r_number',
        'r_lname',
        'r_fname',
        'r_street',
        'r_city',
        'r_state',
        'r_zip',
        'r_email',
        'r_phone'
    ];

    //
}
