<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\User;


class RegisterController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();

        if($user->role === 'Admin') {
            return redirect()->intended('/admin');
        } else {
            if($user->role === 'Coach') {
                return redirect()->intended('/coach');
            }else {
                if($user->role === 'Referee') {
                    return redirect()->intended('/referee');
                } else {
                    return redirect()->intended('/player');
                }
            }
        }
    }

}
