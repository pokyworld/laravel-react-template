<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Hash;

class SocialiteController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback(Request $request)
    {
        if (!$request->has('code') || $request->has('denied')) {
            return redirect('/register');
        }

        try 
        {
            $socialUser = Socialite::driver('facebook')->user();

        } catch (\Exception $e)
        {
            return redirect('/register')->with('errors', 'unable to verify: '.$e);
        }
        $socialUserId = $socialUser->getId();
        $user = User::where('facebook_id', $socialUserId)->first();
        if(!$user)
        {
            $user = User::create([
                'facebook_id' => $socialUser->getId(),
                'email' => $socialUser->getEmail(),
                'name' => $socialUser->getName(),
                'password' => Hash::make($socialUserId),
            ]);
        }
        auth()->login($user);
        return redirect('/dashboard');
        //return $user;
    }
}
