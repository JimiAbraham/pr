<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use phpDocumentor\Reflection\Types\Null_;

class adminController extends Controller
{
    public function index()
    {


        $posts =  Post::with(['user','likes' ])->where('status', 0)
                     ->where('visibility', NULL)
                     ->get();


        return view('admin.approve-testimony', [ 'posts' => $posts])->with('no', 1);
    }



    public function approve( Request $request, $id )
    {
            // dd($request->id);

        $posts = Post::where('id', $request->id)
        ->update(['status' => 1 ]);

        return back()->with('message', 'Post Approved');
    } 
}
