<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function register(Request $request)
    {
        try {
            if (User::where("phone", $request->phone)->count()) {
                return response()->json(['message' => 'Phone Already Exists', 'status' => 500]);
            }
            if (User::where("email", $request->email)->count()) {
                return response()->json(['message' => 'Email Already Exists', 'status' => 500]);
            }


            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->has('phone') ? $request->phone : null,
                'password' => Hash::make($request->password),

            ]);
            if ($user) {
                return ['status' => 200, "message" => 'Registered Successfully'];
            } else {
                return ['status' => 500, "message" => 'Something Went Wrong'];
            }
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()]);
        }
    }

    public function login(Request $request)
    {

        if (!auth()->attempt($request->only(['email','password']))) {
            return ['message' => "Invalid credentials",'status' => 500];
        }

        $user = User::where("email", $request->email)->first();
        $user->tokens()->delete();
        $token = $user->createToken('auth-token')->plainTextToken;
        return response()->json(
            ['access-token' => $token,'user'=>$user ,'status' => 200]
        );
    }
}
