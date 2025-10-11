@include('/layouts/header')

<!-- (layouts/header.php) -->
<!-- <body> -->
<header>
    <div id="header">
        <div id="headerIcon">
            <img src="{{ asset('/images/headerIcon.png') }}">
        </div>
        <div id="headerText">PythonLerningApp</div>
        <div id="headerIcon">
            <img src="{{ asset('/images/headerIcon.png') }}">
        </div>
    </div>
</header>

<div id="underHeader">
    <div class="pageHeaderBar">
        <img class="barImage" src="{{ asset('/images/barImage.png') }}">
        <div class="barText">LoginPage</div>
    </div>

    <div class="errorMessage">
        入力されたメールアドレス、パスワードの組み合わせは存在していません。<br>
        再度入力をお願いいたします
    </div>

    <form id="loginForm" action="{{url('/login')}}" method="post">
        @csrf
        <div id="loginPage">
            <div class="loginArea">
                <div class="loginArea">emailAddress</div>
                <div class="inputArea">
                    <input type="text" id="emailAddress" name="emailAddress" placeholder="メールアドレスを入力">
                </div>
            </div>
            <div class="loginArea">
                <div class="loginArea">パスワード</div>
                <div class="inputArea">
                    <input type="text" id="password" name="password" placeholder="パスワードを入力">
                </div>
            </div>
        </div>

        <div id="loginArea">
            <div id="loginActionButtonArea">
                <div id="loginButton">
                    <img src="../common/assets/registButton.png">
                </div>
                <div id="loginTitle">
                    <button type="button">
                        登録
                    </button>
                </div>
            </div>
            <hr>
        </div>
    </form>
</div>

<div class="containe">
    @yield('content')
</div>
<!-- </body> -->