<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Referee;
use App\School;
use App\Team;

class RefereeController extends Controller
{
    public function index()
    {
        //
        $referees=Referee::all();
        return view('referees.index',compact('referees'));
    }

    public function show($id)
    {
        $referee = Referee::findOrFail($id);
        return view('referees.show',compact('referee'));
    }


    public function create()
    {
        return view('referees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $referee= new Referee($request->all());
        $referee->save();
        return redirect('referees');
    }

    public function edit($id)
    {
        $referee=Referee::find($id);
        return view('referees.edit',compact('referee'));
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
        $referee= new Referee($request->all());
        $referee=Referee::find($id);
        $referee->update($request->all());
        return redirect('referees');
    }

    public function destroy($id)
    {
        Referee::find($id)->delete();
        return redirect('referees');
    }

    public function stringify($id)
    {
        // $referee=Referee::where('id', $id)->select('referee_id','name','address','city','state','zip','home_phone','cell_phone')->first();
        $referee = Referee::where('id', $id)->select('r_number','r_lname','r_fname','r_street','r_city','r_state','r_zip','r_email','r_phone')->first();

        $referee = $referee->toArray();
        return response()->json($referee);
    }

    //
}
