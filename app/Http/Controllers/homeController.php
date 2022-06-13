<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;


class homeController extends Controller
{
    public function index()
    {
        $posts =  Post::with(['user','likes' ])->where('status', 1)->where('visibility', NULL)->inRandomOrder()->get();

        $fposts =  Post::with(['user','likes' ])->where('status', 3)->where('visibility', NULL)->limit(2)->get();


        return view('home', [ 'posts' => $posts,  'fposts' => $fposts ]);
    }

    

    public function destroy(Post $post)
    {
            $post->delete();

            return back();
    }
}
