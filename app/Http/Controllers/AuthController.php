<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function gitRedirect(){
        return Socialite::driver('github')->redirect();
    }
    public function gitCallback(Request $r){
        try {
            $userData = Socialite::driver('github')->user();

            $user = User::where('email', $userData->email)->where('auth_type', 'github')->first();

            if($user){
                Auth::login($user);
                $r->session()->put('user', $user->id);
                return redirect('/home');
            }else{
                $uuid = Str::uuid()->toString();

                $user = new User();
                $user->id_github = $userData->user['id'];
                $user->login = $userData->user['login'];
                $user->name = $userData->name;
                $user->email = $userData->email;
                $user->avatar = $userData->avatar;
                $user->public_repos = $userData->user['public_repos'];
                $user->location = $userData->user['location'];
                $user->bio = $userData->user['bio'];
                $user->password = Hash::make($uuid.now());
                $user->auth_type = 'github';
                $user->save();

                Auth::login($user);
                $r->session()->put('user', $user->id);

                return view('/home', $user);
            }



        } catch (\Throwable $th) {
            //throw $th;
        }
        // dd($userData);
    }
}
