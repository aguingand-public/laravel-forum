<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadApiController extends Controller
{
    function create(Request $request){
        $thread = new \App\Thread();
        $thread->title = $request->input('title');
        $thread->author = $request->input('author');
        $thread->content = $request->input('content');
        $thread->date = date('Y-m-d H:i:s');
        $thread->save();
        return redirect('');
    }
}
