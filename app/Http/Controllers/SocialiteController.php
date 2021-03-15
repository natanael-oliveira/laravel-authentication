<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Laravel\Socialite\Facades\Socialite as FacadesSocialite;
use Socialite;

class SocialiteController extends Controller
{
    public function redirectToProvider()
    {
        return FacadesSocialite::driver('facebook')->redirect();
    }
    public function handleProviderCallback()
    {
        $user = FacadesSocialite::driver('facebook')->user();
    }
}
