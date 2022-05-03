<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Auth;
class UserController extends Controller
{
    public function login()
    {
        return view('auth.user.login');
    }

    public function google() 
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        $callback = Socialite::driver('google')->stateless()->user();
        $data = [
            'name' => $callback->getName(),
            'email' => $callback->getEmail(),
            'avatar' => $callback->getAvatar(),
            'email_verified_at' => now(),
        ]; 

        // First::Jika login menggunakan nama sama, tidak menambah data baru
        // Create::Jika login menggunakan nama yang berbeda, menambah data baru
        $user = User::firstorCreate(['email' => $data['email']], $data);
        Auth::login($user, true);
        return redirect(route('welcome'));
    }
}
