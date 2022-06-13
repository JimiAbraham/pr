<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('post.write');
    }


    public function store( Request $request)
    {
            $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'body' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',

            ]);

            if ($request->hasFile('image'))
             {
         $path = $request->file('image')->store('public/media');
         $media = $request->file('image')->getClientOriginalName();

            }else{
                $path = 'no-image';
                $media = "no-file";
            }
           
            

            $request->user()->posts()->create([

                'title' =>$request->title,
                'category' =>$request->category,
                'body' =>$request->body,
                'visibility' =>$request->anon,
                'media' =>$media,
                'path' => $path,
            
            ]);

            return back()->with('Success', 'Thank You, Testimony will reflect after approval');
    }


    public function details( Post $post)
    {

        $similar = Post::where('category',  $post->category)->inRandomOrder()->limit(4)->get();

        // dd($similar);
        
        return view('post.details', [ 'post' => $post, 'similar' => $similar ]);

    }

   
}
