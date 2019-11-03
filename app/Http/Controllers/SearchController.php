<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;

class SearchController extends Controller
{
    public function index(Request $request)
    {
    	// Если пользователь ничего не спросил - стандартная страница поиска
    	if (!$request->has('search')) {
    		return view ('search.page');
    	}

    	$searchString = '%' . $request->input('search') . '%';

    	// Флаги, где осуществлять поиск
    	$searchInCategoryName = true;
    	$searchInPostTitle = false;
    	$searchInPostBody = true;


    	if ($searchInCategoryName) {
    		$res['CatName'] = Category::where('name','like', $searchString)->get();
    	}
    	if ($searchInPostTitle) {
    		$res['PostTitle'] = Post::where('title', 'like', $searchString)->get();
    	}
    	if ($searchInPostBody) {
    		$res['PostBody'] = Post::where('body', 'like', $searchString)->get();
    	}

    	$res['input'] = $request->all();

		// return view ('search.result', $res);

		if ($request->ajax()) {
    		return view ('search.body', $res);
    	} else {
	    	return view ('search.result', $res);
    	}

 
    }
}
