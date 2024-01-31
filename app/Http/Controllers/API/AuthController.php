<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;


class AuthController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function register(Request $request)
    {

        $request->validate([
            'pseudo' => 'required|string|min:3|max:100|unique:users',
            'email' => 'required|string|email:rcf,dns|max:200|unique:users',
            'password' => 'required|string|min:6|max:100',
            'phoneNumber' => 'required|string|min:10|max:15',
        ]);

        $user = User::create([
            'pseudo' => $request['pseudo'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'phoneNumber' => $request['phoneNumber'],

        ]);

        return response()->json([
            'meta' => [
                'code' => 200,
                'status' => 'success',
                'message' => 'Bien joué, tu as réussi à créer un compte !!'
            ],
            'data' => [
                'user' => $user,
            ]
        ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        // dd($request);
        $token = auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);
        dd($token);
        if ($token) {
            return response()->json([
                'meta' => [
                    'code' => 200,
                    'status' => 'success',
                    'message' => 'BRAVO, tu es trop fort, tu as réussi à te connecter !!'
                ],
                'data' => [
                    'user' => auth()->user(),
                    'access_token' => [
                        'token' => $token,
                        'type' => 'Bearer',
                        'expires_in' => auth()->factory()->getTTL() * 3600,
                    ],
                ]
            ]);
        }
    }

    public function logout()
    {
        $token = JWTAuth::getToken();
        $invalidate = JWTAuth::invalidate($token);

        if ($invalidate) {
            return response()->json([
                'meta' => [
                    'code' => 200,
                    'status' => 'success',
                    'message' => 'Au revoir !!'
                ],
                'data' => []
            ]);
        }
    }
}
