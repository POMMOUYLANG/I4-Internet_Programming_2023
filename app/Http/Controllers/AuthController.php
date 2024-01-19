<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // You may want to send a verification email or generate an OTP here

        return response()->json(['message' => 'User registered successfully']);
    }
    
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('authToken')->accessToken;

            return response()->json(['token' => $token]);
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }

    public function verifyOTP(Request $request)
    {
        // // Implement your logic to verify the OTP here
        // // This could involve sending a code to the user's email or phone number and checking it against the provided input

        // // For example:
        // $user = User::where('email', $request->email)->first();

        // if (!$user || $user->otp !== $request->otp) {
        //     return response()->json(['error' => 'Invalid OTP'], 401);
        // }

        // // Mark the user as verified or perform any other necessary actions

        // return response()->json(['message' => 'Email verified successfully']);
    }
}


// public function register(Request $request)
//     {
//         $validator = Validator::make($request->all(), [
//             'name' => 'required|string|max:255',
//             'email' => 'required|string|email|max:255|unique:users',
//             'password' => 'required|string|min:6|confirmed',
//         ]);

//         if ($validator->fails()) {
//             return response()->json(['error' => $validator->errors()], 422);
//         }

//         // Encrypt the password before saving to the database
//         $encryptedPassword = bcrypt($request->password);

//         // Generate a 6-digit OTP
//         $otpCode = rand(100000, 999999);

//         $user = User::create([
//             'name' => $request->name,
//             'email' => $request->email,
//             'password' => $encryptedPassword,
//             'otp' => $otpCode,
//         ]);

//         // Send OTP to user's email (you may want to use a mail library or service for this)
//         $verificationLink = "http://localhost:9000/verify_otp?code=$otpCode";
//         // Here you can send an email to the user with the verification link

//         return response()->json(['message' => 'User registered successfully. OTP sent to your email.']);
//     }