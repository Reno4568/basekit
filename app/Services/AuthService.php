<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\User;

class AuthService
{
    private static $endpoint = 'https://buildwithangga.com/api/auth/login';

    public static function login(array $credentials)
    {
        $response = Http::post(self::$endpoint, $credentials);
        if ($response->status() == 401) {
            return false;
        }

        return $response['user'];
    }
}