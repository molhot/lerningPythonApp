{{-- resources/views/common/header/remakeHeader.blade.php --}}
<header class="site-header">
    <div class="logo">
        <a href="{{ url('/') }}">My Site　ああああああ</a>
    </div>

    <nav class="main-nav">
        <div class = "headerIconRow">
            <div class = "iconDiv">
                <a href="">ホーム</a>
            </div>
            <div class = "iconDiv">
                <a href="">コース</a>
            </div>
            <div class = "iconDiv">
                <a href="">レコード</a>
            </div>
            <div class = "iconDiv">
                <a href="">登録</a>
            </div>
            <div class = "iconDiv">
                <a href="">登録</a>
            </div>
        </div>
    </nav>
</header>

@push('scripts')
<script src="{{ asset('js/header.js') }}"></script>
@endpush