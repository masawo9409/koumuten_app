<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading ヘッダー2段目削除 -->
        {{-- <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header> --}}
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    @include('partial.map')

    {{-- 住所検索機能  --}}
    <div class="container">
        <h1>住所正規化デモ</h1>
    </div>

    <div id="root"></div>

    <div class="container" style="margin-top: 80px; border-top: 3px solid #dedede; padding: 8px;">
        <p style="text-align: center;">By <a
                href="https://github.com/geolonia/normalize-japanese-addresses">@geolonia/normalize-japanese-addresses</a>
        </p>
    </div>

</body>

</html>
