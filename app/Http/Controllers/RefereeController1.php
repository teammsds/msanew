<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Referee;

class RefereeController extends Controller
{
    //
    public function index()
    {
        return view('referee.index');
    }
}
