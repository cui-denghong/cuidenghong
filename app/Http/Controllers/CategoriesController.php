<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class CategoriesController extends Controller
{
    public function show($id)
    {
        $posts = Post::where('category_id',$id)->Paginate('5');
		return view('categories.index', compact('posts'));
    }
}
