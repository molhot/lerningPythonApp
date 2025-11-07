<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Site')</title>
    {{-- 共通CSS --}}
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common/header.css') }}">
    {{-- ページごとのCSSを追加できる場所 --}}
    @stack('styles')
</head>
<body>
    {{-- 共通ヘッダー --}}
    <x-header />

    {{-- ページごとのメインコンテンツ --}}
    <main>
        @yield('content')
    </main>

    {{-- 共通フッター --}}
    {{-- @include('common.footer') --}}

    {{-- 共通JS --}}
    <script src="{{ asset('js/global.js') }}"></script>
    {{-- ページごとのJSを追加できる場所 --}}
    @stack('scripts')
</body>
</html>
