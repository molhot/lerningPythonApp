{{-- loginページに関しては独立したページとして作成 --}}

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Site')</title>
    <link rel="stylesheet" href="{{ asset('css/login/login.css') }}">
</head>
<body>
    <main>
        <div class = "header">
            <div class = "icon">icon</div>
            <div class = "headerText">ログインページ</div>
        </div>

        @if (isset($isLoginFailed))
        <div class = "loginMissedMessage">
            ログインに失敗しました、再度アカウントの確認をお願いします
        </div>
        @endif

        <form action="login" method="post" class = "loginFormArea" id = "loginFormArea">
            @csrf
            <div class = "FormAll mailForm">
                <div class = "formHeader">メールアドレス</div>
                <input class = "inputArea" name = "mailaddress">
            </div>

            <div class = "FormAll passwordForm">
                <div class = "formHeader">パスワード</div>
                <input class = "inputArea" name = "password">
            </div>
        </form>

        <div class = "loginButton" id = "loginButton">
            <p>ログイン</p>
        </div>
    </main>

    {{-- <script src="{{ asset('js/global.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('js/login/login.js') }}"></script>
</body>
</html>