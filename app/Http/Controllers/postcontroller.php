<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postcontroller extends Controller
{
    public function index ()
    {
        $posts = Post ::all();
        return response()->json($posts);
    }
   
}
