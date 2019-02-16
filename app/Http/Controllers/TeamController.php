<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $team = Team::orderBy('created_at','desc')->get()->toArray();
        return view('pages.team')->with('team',$team);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $this->validate($request, [
            'name' => 'required',
            'rank' => 'required',
            'department' => 'required'
        ]);

        $teams = new Team([
            'name'  => $request->get('name'),
            'rank'  => $request->get('rank'),
            'department'  => $request->get('department')
        ]);
        $teams->save();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

         $teams = Team::find($id);
        return view('pages.edit_tm', compact('teams', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $this->validate($request, [
             'name' => 'required',
            'rank' => 'required',
            'department' => 'required'
        ]);

        $teams= Team::find($id); 
        $teams->name = $request->get('name');
        $teams->rank = $request->get('rank');
        $teams->department = $request->get('department');
        $teams->save();
        return redirect()->route('home')->with('success', 'data added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $teams = Team::find($id);
        $teams->delete();
        return redirect()->route('home');
    }
}
