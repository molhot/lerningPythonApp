{{-- resources/views/common/header/remakeHeader.blade.php --}}
@once
@push('styles')
<link rel="stylesheet" href="{{ asset('css/common/header.css') }}">
@endpush
@endonce

<header class="site-header">
    <div class="logo">
        <a href="{{ url('/') }}">My Site</a>
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
        </div>
    </nav>
</header>

@push('styles')
<link rel="stylesheet" href="{{ asset('css/common/header.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/header.js') }}"></script>
@endpush
