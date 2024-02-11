<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Api\LoginUserRequest;
use App\Models\User;
use App\Concern\HttpResponses;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    use HttpResponses;

    // Login Api (POST)
    public function login(LoginUserRequest $request)
    {
        $request->validated($request->all());

        if (!Auth::attempt($request->only(['email', 'password']))) {
            return $this->error('', 'Credentials do not match', 401);
        }

        $user = User::where('email', $request->email)->first();

        return $this->succes([
            'user' => $user,
            'token' => $user->createToken('API Token Of ' . $user->name)->plainTextToken
        ]);
    }


    // Logout Api (POST)
    public function test(Request $request)
    {
        $user = $request->user();

        return response([
            'message' => $user->name
        ]);
    }
}
