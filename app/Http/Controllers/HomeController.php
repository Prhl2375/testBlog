<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexAction($categoryId = 0){
        if ($categoryId != 0){
            $posts = Post::where('category_id', $categoryId)->get();
        }else{
            $posts = Post::all();
        }
        $categories = Category::all();
        $data = [];
        for ($i = 0; $i < $posts->count(); $i++){
            $data[] = new \stdClass();
            $data[$i]->id = $posts[$i]->id;
            $data[$i]->title = $posts[$i]->title;
            $data[$i]->content = $posts[$i]->content;
            $data[$i]->category = Category::where('id', $posts[$i]->category_id)->get()[0]->name;
            $data[$i]->available = $posts[$i]->available;
        }
        return view('home', ['data' => $data, 'categories' => $categories]);
    }

    public function deletePostAction(Request $request){
        $data = json_decode($request->getContent());
        $post = Post::find($data->id);
        $post->delete();
        return response('success', 200);
    }

    public function createPostAction(Request $request){
        $data = json_decode($request->getContent());
        $post = new Post();
        $post->title = $data->title;
        $post->content = $data->content;
        $post->category_id = Category::where('name', $data->category)->get()[0]->id;
        $post->save();
        return response('success', 200);
    }
}
