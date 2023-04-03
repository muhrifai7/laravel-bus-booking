<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $fields = $request->validate([
                'name' => 'required|string',
                'email' => 'required|string|unique:users,email',
                'password' => 'required|string|confirmed'
            ]);

            $user = User::create([
                'name' => $fields['name'],
                'email' => $fields['email'],
                'password' => bcrypt($fields['password'])
            ]);

            $token = $user->createToken('b73913b16373a0827c7e172fc1a999e6')->plainTextToken;

            $response = [
                'user' => [
                    'id' => Hash::make($user->id), // Hash the user ID with salt
                    'name' => $user->name,
                    'email' => $user->email,
                    'created_at' => $user->created_at,
                    'updated_at' => $user->updated_at,
                ],
                'token' => $token
            ];

            return response()->json([
                'data' => $response,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'data' => $th->getMessage(),
            ], 400);
        }
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        // Check email
        $user = User::where('email', $fields['email'])->first();

        // Check password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Bad creds'
            ], 401);
        }

        $token = $user->createToken('b73913b16373a0827c7e172fc1a999e6')->plainTextToken;

        $response = [
            'user' => [
                'id' => Hash::make($user->id), // Hash the user ID with salt
                'name' => $user->name,
                'email' => $user->email,
                'created_at' => $user->created_at,
                'updated_at' => $user->updated_at,
            ],
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout(Request $request)
    {
        auth()->logout();

        return [
            'message' => 'Logged out'
        ];
    }
}
