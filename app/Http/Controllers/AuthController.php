<?php

namespace App\Http\Controllers;

use App\Mail\OtpMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function register(Request $request){
        $userFound = User::where('email', $request->get('email'))->first();

        if($userFound){
            return response(["message" => "User with this email already exist"], 400);
        }else{
            if($request->get('password') == $request->get('confirm_password')){
                $user = new User();

                $user->name = $request->get('username');
                $user->email = $request->get("email");
                $user->password = bcrypt($request->get('password'));

                $otp = mt_rand(100000, 999999);
                $user->otp = $otp;

                $user->save();

                Mail::to($user->email)->send(new OtpMail('http://localhost/verify_otp?user_id='.$user->id.'&code='.$otp));

                return ["message" => "success"];
            }else{
                return response(["message"=>"Password and confirm_password is not matched!"],400);
            }
        }
    }
    public function login(Request $request){
        // Get email/username and search in the database
        $user = User::where('email', $request->get('email'))->first();

        // Verify given password with the encrypted password inside the database
        if($user){
            if(Hash::check($request->password,$user->password)){

                $token = $user->createToken('API_Token')->accessToken;
    
                return response(['message'=>"Login successfully",'token'=>$token]);
            }else{
                // Return Forbidden Error back to user in case the password is incorrect.
                return response(['error'=>"Forbidden Error"],400);
            }
        }else{
            //User not found
            return response(["error"=>"Cannot find User"], 400);
        }
    }
    public function verifyOTP(Request $request){
        // The Incoming url is in this format: http//localhost/verify_otp?
        $code = $request->query('code');
        $userId = $request->query('user_id');

        $user = User::find($userId);

        if($user && $code == $user->otp){
            $user->email_verified_at = Carbon::now();

            $user->save();
            return ["message" => "OTP is valid, your account is registered"];
        }else{
            return response(["message"=>"OTP is invalid"], 400);
        }
    }

}