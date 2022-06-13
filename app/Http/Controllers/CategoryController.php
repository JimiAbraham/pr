<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;

class CategoryController extends Controller
{
    public function index( $category) 
    {
        $posts = Post::where('category', $category )
                                    ->with(['user','likes' ])
                                   ->get();

                            //  dd($posts);

         return view('post.category', ['posts'=>$posts ,'category'=>$category ] );
    }
}
