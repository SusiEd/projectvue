<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{

    public function index()
    {
        $posts = Post::with('user')->get();
        return response()->json($posts);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $data = $request->validate([
            'title' => 'required|max:20',
            'content' => 'required|max:700',
        ]);

        $post = Post::createFromArray($data);
        return response()->json($post);
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


    public function edit($id)
    {
        $post = Post::find($id);
        return response()->json($post);

    }



    public function update($id, Request $request)
    {
        $post = Post::find($id);
        $post->update($request->all());

        return response()->json('Post wurde erfolgreich upgedated');
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
    }
}
