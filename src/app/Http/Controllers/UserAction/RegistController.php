<?php

namespace App\Http\Controllers\UserAction;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RegistController extends Controller
{
    const PAIDFLGFALSE = 0;

    public function regist(Request $request)
    {
        $userName = $request["username"];
        $password = $request["password"];

        Log::debug(request()->ip());

        $user = User::create(
            [
                'name' => $userName,
                'password' => $password,
                'email' => "",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'ip' => request()->ip(),
                'paid_flg' => self::PAIDFLGFALSE,
            ]
        );

        // 登録後にリダイレクト
        return redirect('/main');
    }
}