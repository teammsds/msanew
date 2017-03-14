<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Team;
use App\School;
use App\Player;

class PlayerController extends Controller
{
    public function index()
    {
        //
        $players=Player::all();
        return view('players.index',compact('players'));
    }

    public function show($id)
    {

        $player = Player::findOrFail($id);

        return view('players.show',compact('player'));
    }


    public function create()
    {

        $teams = Team::lists('tm_name','id');
        return view('players.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $player= new Player($request->all());
        $player->save();

        return redirect('players');
    }

    public function edit($id)
    {
        $player=Player::find($id);
        return view('players.edit',compact('player'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
        //
        $player= new Player($request->all());
        $player=Player::find($id);
        $player->update($request->all());
        return redirect('players');
    }

    public function destroy($id)
    {
        Player::find($id)->delete();
        return redirect('players');
    }
    //
}
