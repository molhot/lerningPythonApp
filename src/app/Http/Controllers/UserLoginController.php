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

        $getUserDbInfoList = (User::where('email', $emailAddress)->where('password', $password)->get());

        if ($getUserDbInfoList->isEmpty()) {
            return view('userAuticate/loginmissed');
        }

        $getUserDbInfo = $getUserDbInfoList[0];

        \Log::debug($getUserDbInfo);
        
        if (empty($getUserDbInfo)) {
            return view('userAuticate/loginmissed');
        }

        return view('main.main')->with('userDbInfo', $getUserDbInfo);
    }
}
