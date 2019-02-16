<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sponsors;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $spon = Sponsors::orderBy('created_at','desc')->get()->toArray();
        return view('pages.home')->with('spon',$spon);
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
            'description' => 'required',
            'link' => 'required',
            'avatar' => 'required'
        ]);

        $spons = new Sponsors([
            'name'  => $request->get('name'),
            'description'  => $request->get('description'),
            'link'  => $request->get('link'),
            'avatar'  => $request->get('avatar')
        ]);
        $spons->save();
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
        $spons = Sponsors::find($id);
        return view('pages.edit_sp', compact('spons', 'id'));
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
            'description' => 'required',
            'link' => 'required',
            'avatar' => 'required'
        ]);

        $spons= Sponsors::find($id); 
        $spons->name = $request->get('name');
        $spons->description = $request->get('description');
        $spons->link = $request->get('link');
        $spons->avatar = $request->get('avatar');
        $spons->save();
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
         $spons = Sponsors::find($id);
        $spons->delete();
        return redirect()->route('home');
    }


    function upload(Request $request)
    {
     // $this->validate($request, [
     //  'select_file'  => 'required|image|mimes:jpg,png,gif|max:2048'
     // ]);

     $image = $request->file('select_file');

     $new_name = rand() . '.' . $image->getClientOriginalExtension();

     $image->move(public_path('images'), $new_name);
     return back()->with('success', 'Image Uploaded Successfully')->with('path', $new_name);
    }



}
