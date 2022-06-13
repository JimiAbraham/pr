<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{

   //  public function __construct()
   //  {

   //     $this->middleware(['guest']);
   //  }


    public function index( )
    {
       return view('auth.login');
    }


    public function store( Request $request)
    {
      //  dd($request->name);


      
      $this->validate( $request, [

         'email' => 'required|email',
         'password' => 'required',
     ]);



      if( !auth()->attempt( $request ->only('email', 'password' )))
           {
                return back()->with('status', 'Hey! login details are not correct');
           }
            return redirect ('dashboard');
    }
}
