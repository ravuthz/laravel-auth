<?php

namespace Ravuthz\LaravelAuth\Controller;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Ravuthz\LaravelAuth\AuthService;

class AuthController extends Controller
{
    public function __construct(protected AuthService $authService)
    {
        //
    }

    public function register(Request $request)
    {
        dd(2);
        $userData = $request->validate([
            'first_name' => 'required|string|min:2|max:255',
            'last_name' => 'required|string|min:2|max:255',
            'phone' => 'required|string|min:9|max:20|unique:users,phone',
            'email' => 'required|string|email|max:255|unique:users,email',
            'username' => 'required|string|min:3|max:255|unique:users,username',
            'password' => 'required|string|min:6|max:50'
        ]);

        try {
            $user = $this->authService->registerUser($userData);
            return response()->json([
                'message' => 'User registered successfully',
                'user' => $user
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 422);
        }
    }
}