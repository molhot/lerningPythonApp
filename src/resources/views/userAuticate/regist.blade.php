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
            <div class = "headerText">ユーザー登録</div>
        </div>

        <div class = "loginFormArea">
            <div class = "FormAll mailForm">
                <div class = "formHeader">メールアドレス</div>
                <input class = "inputArea" name = "mailaddress">
            </div>

            <div class = "FormAll passwordForm">
                <div class = "formHeader">パスワード</div>
                <input class = "inputArea" name = "password">
            </div>
        </div>

        <div class = "loginButton" id = "loginButton">
            <p>登録</p>
        </div>
    </main>

    <script src="{{ asset('js/global.js') }}"></script>
</body>
</html>