<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::paginate(10);
        return view('posts.index')
            ->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
        //$request->validate([
        //    'title' => 'required',
        //    'texto' => 'required',
        //]);
        $post = new Post;
        $post->titulo = $request->titulo;
        $post->texto = $request->texto;
        $result;
        if( $request->imagen && $request->imagen->isValid() ){
            $result = $request->imagen->store('images', 'public');
            $post->imagen = $result;
        }
        $post->save();
        Session::flash('message', 'Post creado');
        return Redirect::to('posts');

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
        $post = Post::find($id);
        return view('posts.show')
            ->with('post', $post);
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
        $post = Post::find($id);

        return view('posts.edit')
            ->with('post', $post);
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
        $post = Post::find($id);
        $post->titulo = $request->titulo;
        $post->texto = $request->texto;
        $result;
        if( $request->imagen && $request->imagen->isValid() ){
            $result = $request->imagen->store('images', 'public');
            $post->imagen = $result;
        }
        $post->save();
        Session::flash('message', 'Post editado correctamente.');
        return Redirect::to('posts');
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
        $item = Post::find($id);
        $item->delete();

        Session::flash('message', 'Post elminado correctamente.');
        return Redirect::to('posts');

    }
}
