<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Scopes\OwnedByUser;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::withoutGlobalScope(OwnedByUser::class)->get();
        //$posts = Post::all();
        return view('posts.index', ["posts" => $posts]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($post_id)
    {
        $post = Post::withoutGlobalScope(OwnedByUser::class)->findOrFail($post_id);
        return view('posts.show', ["post" => $post]);
    }

}
