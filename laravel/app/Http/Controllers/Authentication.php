<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wallet;
use Hash;
use Illuminate\Http\Request;

class Authentication extends Controller
{
    public function login(Request $r)
    {
        $validated = $r->validate([
            'username' => 'required',
            'body' => 'password',
        ]);
        $data = "";
        $isSuccess = false;
        $message = "";
        $usernameexist = User::where('mobile', $r->username)->orWhere('email', $r->username)->first();
        if ($usernameexist) {
            if (Hash::check($r->password, $usernameexist->password)) {
                $r->session()->put('userlogin', $usernameexist);
                $message = "";
                $isSuccess = true;
            } else {
                $message = "Incorrect Password!";
            }
        } else {
            $message = "Username not found!";
        }
        $res = array("data" => $data, "isSuccess" => $isSuccess, "message" => $message);
        return response()->json($res);
    }

    public function register(Request $r)
    {
        $validated = $r->validate([
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $data = "";
        $isSuccess = false;
        $message = "Something wen't wrong!";
        $promocode = '';
        if ($r->promocode != '') {
            $existpromocode = User::where('id', $r->promocode)->first();
            if ($existpromocode) {
                $olddata = User::where('email', $r->email)->orWhere('mobile', $r->mobile)->get();
                if (count($olddata) > 0) {
                    $message = "Dublicate Email Id/Mobile No., Please enter Unique Email id";
                } else {
                    $wallet = new Wallet;
                    $user = new User;
                    $user->name = $r->name;
					$user->image = "/images/avtar/av-".rand(1,72).".png";
                    $user->mobile = $r->mobile;
                    $user->email = $r->email;
                    $user->password = Hash::make($r->password);
                    $user->currency = '₹';
                    $user->gender = $r->gender;
                    $user->country = 'IN';
                    $user->status = '1';
                    $user->promocode = $r->promocode;
                    if ($user->save()) {
                        $afterregisterdata = User::where('email', $r->email)->orderBy('id', 'desc')->first();
                        if ($afterregisterdata) {
                            $wallet->userid = $afterregisterdata->id;
                            $wallet->amount = setting('initial_bonus');
                            if ($wallet->save()) {
                                $data = array("username" => $afterregisterdata->email, "password" => $r->password, "token" => csrf_token());
                                $isSuccess = true;
                            }
                        }
                    }
                }
            }else{
                $data = array();
                $message = "Invalid Promocode";
            }
        } else {
            $olddata = User::where('email', $r->email)->orWhere('mobile', $r->mobile)->get();
            if (count($olddata) > 0) {
                $message = "Dublicate Email Id/Mobile No., Please enter Unique Email id";
            } else {
                $wallet = new Wallet;
                $user = new User;
                $user->name = $r->name;
                $user->mobile = $r->mobile;
                $user->email = $r->email;
                $user->password = Hash::make($r->password);
                $user->currency = '₹';
                $user->gender = $r->gender;
                $user->country = 'IN';
                $user->status = '1';
                $user->promocode = $r->promocode;
                if ($user->save()) {
                    $afterregisterdata = User::where('email', $r->email)->orderBy('id', 'desc')->first();
                    if ($afterregisterdata) {
                        $wallet->userid = $afterregisterdata->id;
                        $wallet->amount = setting('initial_bonus');
                        if ($wallet->save()) {
                            $data = array("username" => $afterregisterdata->email, "password" => $r->password, "token" => csrf_token());
                            $isSuccess = true;
                        }
                    }
                }
            }
        }
        $res = array("data" => $data, "isSuccess" => $isSuccess, "message" => $message);
        return response()->json($res);
    }

    public function adminlogin(Request $r)
    {
        $validated = $r->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $response = array('status' => 0, 'title' => "Oops!!", 'message' => "Invalid Credential!");
        $usernameexist = User::where('mobile', $r->username)->orWhere('email', $r->username)->where('isadmin', '1')->first();
        if ($usernameexist) {
            if (Hash::check($r->password, $usernameexist->password)) {
                $r->session()->put('adminlogin', $usernameexist);
                $response = array('status' => 1, 'title' => "Success!!", 'message' => "Login Successfully!");
            } else {
                $response = array('status' => 0, 'title' => "Oops!!", 'message' => "Incorrect Password!");
            }
        } else {
            $response = array('status' => 0, 'title' => "Oops!!", 'message' => "Username not exists!");
        }
        return response()->json($response);
    }
}
