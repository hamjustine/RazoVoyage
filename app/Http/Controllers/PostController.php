<?php

namespace App\Http\Controllers;

use App\Voyage;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valide = false;
        $voyages = Voyage::all();

        return view('admin/admin_tables',['voyages' => $voyages, 'valide'=> $valide]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $valide = false;
        return view('admin/new_posts',['valide' => $valide]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Voyage;
        $post->titre = $request->input('titre');
        $post->description = $request->input('description');
        $post->destination = $request->input('destination');
        $post->prix = $request->input('prix');
        $post->image = $request->input('image');
        $post->save();
        $valide = 'créé';
        return view('admin/new_posts', ['valide' => $valide]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Voyage $voyage)
    {
        $valide = false;
        return view('admin/update_post',['voyage' => $voyage, 'valide' => $valide]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voyage $voyage)
    {
        $valide = true;
        $voyage->titre = $request->input('titre');
        $voyage->description = $request->input('description');
        $voyage->destination = $request->input('destination');
        $voyage->prix = $request->input('prix');
        $voyage->image = $request->input('image');
        $voyage->save();
        return view('admin/update_post',['voyage' => $voyage, 'valide' => $valide]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voyage $voyage)
    {
       
        $valide = 'true';
        $voyage->delete();
        return redirect()->route('tables');
    }
}
