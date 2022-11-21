<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
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
        $posts = Post::with('user')->paginate(5);
        return view('posts.index',compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::findOrFail(1);
        $post = new Post();
        $post->titulo = "Titulo: ". rand();
        $post->contenido = "Contenido: ". rand();
        $post->user()->associate($user);
        $post->save();
        $posts = Post::orderBy('titulo')->paginate(5);
        return view('posts.index', compact('posts'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $post->titulo = "Titulo: ". rand();
        $post->contenido = "Contenido: ". rand();
        $post->save();
        return view('posts.show', compact('post'));
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        $posts = Post::orderBy('titulo')->paginate(5);
        return view('posts.index', compact('posts'));
    }

    //No he conseguido hacer el insertar y el editar de prueba con estos metodos,
    //Los he puesto en el create y edit.

    // public function nuevaPrueba(){
    //     $post = new Post();
    //     $post->titulo = "Titulo: ". rand();
    //     $post->contenido = "Contenido: ". rand();
    //     $post->save();
    //     $posts = Post::orderBy('titulo')->paginate(5);
    //     return view('posts.index', compact('posts'));
    // }


    // public function editarPrueba($id){
    //     $post = Post::findOrFail($id);
    //     $post->titulo = "Titulo: ". rand();
    //     $post->contenido = "Contenido: ". rand();
    //     $post->save();
    //     $posts = Post::orderBy('titulo')->paginate(5);
    //     return view('posts.index', compact('posts'));
    // }
}
