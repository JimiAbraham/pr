<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\Post;
use App\Models\Like;
use App\Models\User;

class PostLikeController extends Controller
{
        


    


    public function store( Post $post, Request $request)
    {
     $post->likes()->create([

            'user_id' => $request->user()->id,
        ]);
        return back();
    }


    public function destroy( Post $post, Request $request)
    {
            $request->user()->likes()->where('post_id', $post->id)->delete();

            return back();
    }

//    omooo....i no see road again oooo
    
    public function fav(User $user, Request $request)
    {
        
       $posts = Post::join('likes', 'likes.post_id', '=', 'posts.id')
                    // ->where ('posts.user_id', Auth::id())
                    ->get();

                     //dd($posts);


             return view('post.favourites', [ 'posts' => $posts ]);
    }


}
