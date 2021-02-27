<?php

namespace App\Http\Controllers;
use App\Models\post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //index posts 
    public function index(){
        $post = Post::all();
        //dd($post);
        return response()->json(['posts'=> $post]);
    }
    //show post
    public function individual($id){
        $post = Post::findOrfail($id);
        //dd($post);
        return response()->json(['post'=> $post]);
    }

}
