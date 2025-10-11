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

        $getUserDbInfo = User::where('email', $emailAddress)->where('password', $password)->get();
        
        if ($getUserDbInfo == NULL) {
            return view('userAuticate/loginmissed');
        }

        return view('main.main')->with('userDbInfo', $getUserDbInfo);
    }
}
