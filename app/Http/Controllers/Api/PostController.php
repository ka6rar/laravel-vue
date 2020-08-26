<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{

    public function index()
    {
       return response()->json([
            'data' =>  Post::get()
        ]);
    }




    public function store(Request $request) {
        $post_add = new Post();
        $post_add->title = $request->title;
        $post_add->body = $request->body;
        $post_add->save();

        return response()->json([
            'Date' => 'Success'
        ]);
    }
}
