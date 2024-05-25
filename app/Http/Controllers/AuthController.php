<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use App\Http\Controllers\Controller;

// "2|Ukk7z5LtDZVnbixfSfMuaiXW2d9mKRqWGD2KfgEC6d75be53"

class AuthController extends Controller
{
    public function login(Request $request) {

        if(Auth::attempt($request->only('email', 'password'))) {

            $response = [
                'message' => 'Authorized',
                'token' => $request->user()->createToken('token')->plainTextToken
            ];

            return response()->json($response, 200);
        }

        return response()->json([
            'message' => 'Unauthorized'
        ], 403);
    }


    public function logout(Request $request) {

        $request->user()->tokens()->delete();

        return response()->json([
            'message' => 'Logged out'
        ], 200);
    }

}
