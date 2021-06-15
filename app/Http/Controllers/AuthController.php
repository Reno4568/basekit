<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Auth;
use App\Models\User;
use App\Models\RegisteredUser;
use App\Services\AuthService;

class AuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback(Request $request)
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/gate')->with('error', 'Gagal menyambungkan dengan akun Google kamu');
        }

        $payload = ['provider_id' => $user->id, 'email' => $user->email, 'provider_name' => 'google'];
        $user = AuthService::login($payload);
        if ($user) {
            return $this->successLogin($user, $request);
        }

        return redirect('/gate')->with('error', 'Kamu belum terdaftar sebagai member BWA!');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = AuthService::login($request->only('email', 'password'));
        if ($user) {
            return $this->successLogin($user, $request);
        }

        return redirect('/gate')->with('error', 'Email atau password salah!');
    }

    public function successLogin($user, $request)
    {
        if (!strpos($user['avatar'], 'buildwithangga.com')) {
            $user['avatar'] = 'https://buildwithangga.com' . $user['avatar'];
        }
        $request->session()->put('user', $user);

        $user = collect($user)->only('name', 'email', 'avatar', 'is_premium');

        $findPreviousUser = RegisteredUser::whereJsonContains('user->name', $user['name'])->first();
        if (!$findPreviousUser) {
            RegisteredUser::create(['user' => json_encode($user)]);
        }

        return redirect(session('link'));
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');

        return redirect('/');
    }
}