<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illutminate\Support\Facades\Hash;

class AuthentificationController extends Controller
{
    public function register(Request $request) {
        //fields
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

        $token = $user->createToken('myAppToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    // public function ldogout(Request $request) {
    //     auth()->user()->token()->delete();

    //     return [
    //         'message' => 'Logged out'
    //     ];
    // }

    public function logout(User $user){
        
        $user->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }
}