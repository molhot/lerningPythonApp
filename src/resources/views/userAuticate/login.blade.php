@php
$noExistUnderHeader = true;
@endphp

<!DOCTYPE html>
<html>
    <head>
        <link href="{{ asset('/css/common/header.css') }}" rel="stylesheet"  type="text/css"  media="all">
        <link href="{{ asset('/css/login.css') }}" rel="stylesheet"  type="text/css"  media="all">
    </head>

@include('/layouts/header/header')

<div id="loginFormContainer">
    <form id="loginForm" action="{{url('/login')}}" method="post">
        @csrf
        <div id="loginPage">
            <div class="loginArea">
                <div class="loginAreaHolder">emailAddress</div>
                <div class="inputArea">
                    <input type="text" id="emailAddress" name="emailAddress" placeholder="メールアドレスを入力">
                </div>
            </div>
            <div class="loginArea">
                <div class="loginAreaHolder">パスワード</div>
                <div class="inputArea">
                    <input type="text" id="password" name="password" placeholder="パスワードを入力">
                </div>
            </div>
        </div>

        <div id="loginSubmmitArea">
            <div id="loginActionButtonArea">
                <div id="loginButton">
                    <img src="../common/assets/registButton.png">
                </div>
                <div id="loginTitle">
                    <button type="button">
                        ログイン
                    </button>
                </div>
            </div>
            <div id="contentSeparator">
                <hr>
            </div>
        </div>
    </form>
</div>

<div class="containe">
    @yield('content')
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('/js/login/login.js') }}"></script>
</html>
<!-- </body> -->