<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class DashboardController extends Controller
{

// public function __construct()
    // {

    //    $this->middleware(['auth']);
    // }


    public function index()
    {
       
      $posts = Post::where('user_id', Auth::user()->id)
                   ->with(['user', 'likes'])
                   ->get();
       return view('dashboard', [ 'posts'=>$posts]);
    }



    public function set()
    {
      return view('settings');
    }

    public function store( Request $request)
    {
          $this->validate( $request, [

            'uname' => 'required', 
            'church' => 'required', 
            'location' => 'required', 
          ]);

          $update = Auth::user();

        $update->username = $request['uname'];
        $update->church = $request['church'];
        $update->location = $request['location'];

        $update->save();

        if ($update)
        {
          return redirect('dashboard')->with('message','Profile Updated, Thank You');
        }
      
        return back()->with('message','Something went wrong, Please try again');
    }

}
