<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;

class PostController extends Controller
{
    //

    public function index(Request $request)
    {
        echo $request->input('OrderBy');
        //var_dump($request);
    	//$posts = Post::All();
    	$posts = Post::orderBy('created_at')->paginate(3);
    	return view ("posts.all", ['posts' => $posts]);
    }

    public function viewOne($category, $slug)
    {
    	$post = Post::Where('slug', $slug)->first();
    	return view ("posts.show", ['post' => $post]);
    }


    public function viewByCat($category) 
    {  	
    	
    	//$cat = Category::Where('slug', $category)->first();
    	//$posts = Post::Where('category_id', $cat->id )->get();

    	$posts = Category::Where('slug', $category)->first()->posts()->get();
    	
		return view ("posts.all", ['posts' => $posts]);
    }

}
