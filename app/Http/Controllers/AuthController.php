<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;

class AuthController extends Controller
{
    /**
     * Login the user.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request) {
        $credentials = $request->only(['email', 'password']);
        if($token = auth::attempt($credentials)) {
            return response()->json(['token' => $token]);
        }
    }
}
