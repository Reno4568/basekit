<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\RegisteredUser;
use App\Services\AuthService;

class AuthController extends Controller
{
    public function redirectToGoogle()
    {
        // redirect to google
        return Socialite::driver('google')->redirect();
    }

    public function callback(Request $request)
    {

        $user = Socialite::driver('google')->stateless();
        dd($user);

        try {
            // $user = Socialite::driver('google')->stateless()->user();
            // dd($user);

            $findUser = User::where('google_id', $user->getId())->first();
            if ($findUser) {
                Auth::login($findUser);
                return redirect()->route('index');
            } else {
                $newUser = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getemail(),
                    'password' => Hash::make($user->getId()),
                    'google_id' => $user->getId(),
                ]);

                Auth::login($newUser);
                return redirect()->route('index');
            }
        } catch (\Exception $e) {
            // dd($e->getMessage());
            return redirect('/gate')->with('error', 'Gagal menyambungkan dengan akun Google kamu');
        }

        // try {
            
        //     // checking google socialite - get data google
        //     $user = Socialite::driver('google')->user();
        //     $find_user = User::where('google_id', $user->getId())->first();

        //     if($find_user){

        //         // login process
        //         Auth::login($find_user);
        //         return redirect()->route('index');

        //     }else{

        //         // register new user
        //         $new_user = new User;
        //         $new_user->name = $user->getName();
        //         $new_user->email = $user->getEmail();
        //         $new_user->password = Hash::make($user->getId());
        //         $new_user->google_id = $user->getId();
        //         $new_user->save();

        //         // login process
        //         Auth::login($find_user);
        //         return redirect()->route('index');

        //     }

        // } catch (\Exception $e) {

        //     // return to gate
        //     return redirect()->route('gate')
        //                     ->withErrors('Email tersebut sudah terdaftar, silahkan login dengan email lain')
        //                     ->withInput();
        //     // return redirect('/gate')->with('error', 'Gagal menyambungkan dengan akun Google kamu');
            
        // }

        // $payload = ['provider_id' => $user->id, 'email' => $user->email, 'provider_name' => 'google'];
        // $user = AuthService::login($payload);
        // if ($user) {
        //     return $this->successLogin($user, $request);
        // }

        // return redirect('/gate')->with('error', 'Kamu belum terdaftar sebagai member BWA!');
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