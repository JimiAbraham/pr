<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }


    public function callback()
    {
        try{
            $user = Socialite::driver('google')->user();
            $user = User::where('google_id', $user->id)->first();

            if ($user)
            {
                auth::login($user);
                return redirect('/');
            }else{
                    $newUser = User::create([
                            'name' => $user->name,
                            'email' => $user->email,
                            'google_id' => $user->id,
                            'password' => encrypt('JesusIsLord'),
                    ]);
                    auth::login($newUser); 
                    return redirect('/');
                 }
        }catch (Exception $e){
            dd($e->getMessage());
        }
    }
}
