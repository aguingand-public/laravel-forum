<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createForm($id) {
        return view('new_post',['thread_id'=>$id]);
    }
}
