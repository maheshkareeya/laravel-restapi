<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function get(){
        return response()->json(Post::get());
    }
    public function getid($id){
        return response()->json(Post::find($id));
    }
    public function delete($id){
        return response()->json(Post::destroy($id));
    }
    public function post(Request $request){
        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->author = $request->input('author');
        $post->save();
        return response()->json($post);
    }
    public function put(Request $request,$id){
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->author = $request->input('author');
        $post->save();
        return response()->json($post);
    }
}
