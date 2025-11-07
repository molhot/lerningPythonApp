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
        $userName = "username_test"; //後で変更
        $emailAddress = $request["mailaddress"];
        $password = $request["password"];

        Log::debug("request ip is");
        Log::debug(request()->ip());
        \Log::debug("password");
        \Log::debug($password);

        $user = User::create(
            [
                'name' => $userName,
                'password' => $password,
                'email' => $emailAddress,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'ip' => request()->ip(),
                'paid_flg' => self::PAIDFLGFALSE,
            ]
        );

        Log::debug("いいいいい");

        // 登録後にリダイレクト
        return redirect('login');
    }
}