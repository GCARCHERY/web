<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $post = Posts::orderBy('created_at','desc')->get()->toArray();
        return view('pages.news')->with('post',$post);

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
         'post_title' => 'required',
         'post_content' => 'required',
    ]);
    $posts = new Posts([
        'post_title' => $request->get('post_title'),
         'post_content' => $request->get('post_content'),
    ]);
    $posts->save();
    return redirect()->route('home')->with('success', 'data added');

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

        $posts = Posts::find($id);
        return view('pages.edit', compact('posts', 'id'));
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
            'post_title' => 'required',
            'post_content' => 'required',
        ]);

        $posts= Posts::find($id); 
        $posts->post_title = $request->get('post_title');
        $posts->post_content = $request->get('post_content');
        $posts->save();
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
        $posts = Posts::find($id);
        $posts->delete();
        return redirect()->route('home');
    }
}
