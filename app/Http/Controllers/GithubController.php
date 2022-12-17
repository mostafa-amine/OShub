<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback()
    {
        $githubUser = Socialite::driver('github')->user();
        $user = User::where('provider_id' , $githubUser->getId())->first();

        if (!$user) {
            $user = User::create([
                'name' => $githubUser->getName(),
                'user_name' => $githubUser->getNickname(),
                'email' => $githubUser->getEmail(),
                'password' => '',
                'provider' => 'github',
                'provider_id' => $githubUser->getId(),
            ]);
        }

        auth()->login($user , true);

        return redirect()->route('home');

    }

}
