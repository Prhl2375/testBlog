<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class SingleController extends Controller
{
    public function indexAction($id){
        $data = Post::where('id', $id)->get()[0];
        $category = Category::where('id', $data->category_id)->get()[0]->name;
        return view('single', ['data' => $data, 'category' => $category]);
    }


    public function editPostAction(Request $request){
        $data = json_decode($request->getContent());
        $post = Post::find($data->id);
        $post->content = $data->text;
        $post->save();
        return response('success', 200);
    }
}
