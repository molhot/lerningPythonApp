<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function login(Request $request)
    {
        \Log::debug($request);
        $emailAddress = $request["mailaddress"];
        $password = $request["password"];
        $userDbInfoList = User::where('email', $emailAddress)->get();
        \Log::debug("user db info");
        \Log::debug($userDbInfoList);

        if ($userDbInfoList->isEmpty()) {
            return view('userAuticate/login', 
                [
                    'isLoginFailed' => true,
                ]
            );
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
