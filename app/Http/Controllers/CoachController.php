<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Coach;

class CoachController extends Controller
{
    //
    public function index()
    {
        return view('coach.index');
    }
}
