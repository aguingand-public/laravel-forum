<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function viewAll() {
        $threads = \App\Thread::orderBy('date','desc')->get();
        return view('threads',['threads'=>$threads]);
    }

    public function viewOne($id) {
        $thread = \App\Thread::find($id);
        $posts = \App\Post::where('thread_id',$id)->orderBy('date','asc')->get();

        return view('thread',['thread'=>$thread, 'posts'=>$posts]);
    }

    public function createForm() {
        return view('new_thread');
    }
}
