<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable=[
        'p_number',
        'p_lname',
        'p_fname',
        'p_street',
        'p_city',
        'p_state',
        'p_zip',
        'p_email',
        'p_phone',
        'p_estatus',
        'team_id',
        'school_id'
    ];
    public function school()
    {
        return $this->belongsTo('App\School');
    }

    public function team()
    {
        return $this->belongsTo('App\Team');
    }
    //
}
