<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostApiController extends Controller
{
    function create(Request $request, $id) {
        $post = new \App\Post();
        $post->thread_id = $id;
        $post->author = $request->input('author');
        $post->content = $request->input('content');
        $post->date = date('Y-m-d H:i:s');
        $post->save();
        return redirect(route('thread',['id'=>$id]));
    }
}
