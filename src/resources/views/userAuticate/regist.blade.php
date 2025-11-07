{{-- loginページに関しては独立したページとして作成 --}}

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Site')</title>
    <link rel="stylesheet" href="{{ asset('css/regist/regist.css') }}">
</head>
<body>
    <main>
        <div class = "header">
            <div class = "icon">icon</div>
            <div class = "headerText">ユーザー登録</div>
        </div>

        <form action="/regist/Action" method="post" class = "loginFormArea" id = "registForm">
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

        <div class = "registButton" id = "registButton">
            <p>登録</p>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('js/regist/regist.js') }}"></script>
</body>
</html>