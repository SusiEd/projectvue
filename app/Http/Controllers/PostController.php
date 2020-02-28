<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{

    public function index()
    {
        $posts = Post::with('user')->orderBy('created_at', 'desc')->get();
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


    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return response()->json('Der Post wurde erfolgreich gelöscht');
    }

    public function getUserPosts()
    {
        auth()->id();
        $posts = Post::with('user')->where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return response()->json($posts);

    }

  public function editUserPost($id)
    {

        $post = Post::find($id);
        return response()->json($post);

    }

    public function updateUserPost($id, Request $request)
    {
        $post = Post::find($id);
        $post->update($request->all());

        return response()->json('Update erfolgreich');
    }

    public function destroyUserPost($id)
    {
        $post = Post::find($id);
        $post->delete();

        return response()->json('Der Post wurde erfolgreich gelöscht');
    }

    public function storeUserPost(Request $request)
    {

        $data = $request->validate([
            'title' => 'required|max:20',
            'content' => 'required|max:700',
        ]);

        $post = Post::createFromArray($data);
        return response()->json($post);
    }
}
