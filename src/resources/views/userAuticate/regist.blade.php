<!DOCTYPE html>
<html lang="japanese">
    <head>
        <link href="{{ asset('/css/common/registpage.css') }}" rel="stylesheet"  type="text/css"  media="all">
    </head>

    <body>
        <div id="applicationTitle">
            python学習アプリ
        </div>

        <form action="{{url('/main')}}" method="post">
            @csrf
            <div id="registPage">
                <div class="registArea">
                    <div class="holderArea">ユーザー名</div>
                    <div class="inputArea">
                        <input type="text" id="username" name="username" placeholder="ユーザー名を入力">
                    </div>
                </div>
                <div class="registArea">
                    <div class="holderArea">パスワード</div>
                    <div class="inputArea">
                        <input type="text" id="password" name="password" placeholder="パスワードを入力">
                    </div>
                </div>
            </div>

            <div id="registArea">
                <div id="registActionButtonArea">
                    <div id="registButton">
                        <img src="../common/assets/registButton.png">
                    </div>
                    <div id="registTitle">
                        <button type="button">
                            登録
                        </button>
                    </div>
                </div>
                <hr>
            </div>
        </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('/js/regist/regist.js') }}"></script>
    </body>
</html>