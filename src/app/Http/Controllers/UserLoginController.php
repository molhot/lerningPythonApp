<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    public function login(Request $request)
    {
        $emailAddress = $request["emailAddress"];
        $password = $request["password"];

        \Log::debug("this controller called");

        $userDbInfoList = (User::where('email', $emailAddress)->where('password', $password)->get());

        if ($userDbInfoList->isEmpty()) {
            return view('userAuticate/loginmissed');
        }

        $userDbInfo = $userDbInfoList[0];

        \Log::debug($userDbInfo);
        
        if (empty($userDbInfo)) {
            return view('userAuticate/loginmissed');
        }

        Auth::login($userDbInfo);

        return view('main.main')->with('userDbInfo', $userDbInfo);
    }
}
