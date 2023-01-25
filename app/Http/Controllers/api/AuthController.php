<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Create User
     * @param Request $request
     * @return User
     */

    public function createUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'validation error',
                    'error' => $validator->errors(),
                ],
                401,
            );
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(
            [
                'status' => true,
                'message' => 'User Created Successfully',
                'token' => $user->createToken('API TOKEN')->plainTextToken,
            ],
            200,
        );
    }

    public function loginUser(Request $request)
    {
        try {
            $validateUser = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'requried',
                'password' => 'required',
            ]);
            if (Auth::attempt($request->all())) {
                return response()->json([
                    // 'message' => auth()->user()->createToken("API TOKEN")->plainTextToken,
                    'test' => auth()
                        ->user()
                        ->createToken('API TOKEN')->accessToken,
                ]);
            } else {
                return response()->json([
                    'message' => 'fail login',
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'fail login',
            ]);
        }
    }

    public function test()
    {
        return response()->json([
            'message' => 'Successfully',
        ]);
    }
}
