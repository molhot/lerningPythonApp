<?php

namespace App\Http\Controllers\UserAction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistController extends Controller
{
    public function regist(Request $request)
    {
        // $request->validate([
        //     'username' => 'required|string|max:255',
        //     'password' => 'required|string|min:6',
        // ]);

        // User::create([
        //     'name' => $request->username,
        //     'password' => bcrypt($request->password),
        // ]);

        // 登録後にリダイレクト
        return redirect('/main');
    }
}