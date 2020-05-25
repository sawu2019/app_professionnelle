<?php

namespace App\Http\Controllers;

use App\Post;
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
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Post::class);
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre'=>'required',
            'type_ar'=>'required',
            'annees'=>'required'
        ]);
        $fichierPath = request('fichier')->store('uploads','public');
        $post = new Post([
            'titre' => $request->get('titre'),
            'description' => $request->get('description'),
            'type_ar' => $request->get('type_ar'),
            'annees' => $request->get('annees'),
            'fichier' => $fichierPath

        ]);
        $post->save();
        return redirect('/posts')->with('Succes','Post saved !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titre'=>'required',
            'type_ar'=>'required',
            'annees'=>'required'
        ]);
        $post = Post::find($id);
        $post->titre =  $request->get('titre');
        $post->description = $request->get('description');
        $post->type_ar = $request->get('type_ar');
        $post->annees = $request->get('annees');
        $post->fichier = $request->get('fichier');
        $post->save();

        return redirect('/posts')->with('Reussi', 'Modification Effectuer!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', $id);
        $post = Post::find($id);
        $post->delete();

        return redirect('/posts')->with('Reussi', 'Suppression Effectuer!');
    }

}
