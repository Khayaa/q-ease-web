<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        //Log::info($request->all());
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|confirmed',
            'device_name' => 'required',

        ]);


        //get the role_id of the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'device_name' => $request->device_name,


        ]);

        $token = $user->createToken($request->device_name)->plainTextToken;



        return response()->json([
            'role_id' => $user->role_id,
            'token' => $token,
            'message' => 'You have registered successfully',
            'user' => $user
        ], 201);
    }

    public function login(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',

        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $token = $user->createToken($request->device_name)->plainTextToken;

        return response()->json([
        'token' => $token,
        'message' => 'You have logged in successfully',
        'user' => $user,
        ]);
    }

    public function logout(Request $request){

        $user = User::where('id', $request->id)->first();
        if($user){
            $user->tokens()->delete();
        }

        return response()->noContent();

    }
}
