<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function login(LoginRequest $request)
    {
        $validatedData = $request->validated();

        $credentials = [
            'email' => $validatedData['email'],
            'password' => $validatedData['password']
        ];

        $token = Auth::attempt($credentials);

        if (!$token) {
            return response()->json([
                "status" => 'error',
                "message" => "Unauthorised"
            ], 401);
        };

        return response()->json(
            [
                "status" => "success",
                "user" => Auth::user(),
                "authorization" => [
                    "token" => $token,
                ]
            ]
        );
    }
}
