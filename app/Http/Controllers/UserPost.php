<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserPost extends Controller
{
            public function index(User $user)
        {
            //  return dd($user->name);

            $posts = $user->posts()->with(['user', 'likes'])->paginate(20);

             return view('user', [      
                'user'=>$user, 
                'post'=>$posts,         
            ]);
        }

}
 