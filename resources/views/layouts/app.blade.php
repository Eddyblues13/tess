<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'TESLA - Invest. Trade. Drive.')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @stack('styles')
</head>

<body>
    @include('layouts.header')

    @include('layouts.mobile-menu')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    @include('layouts.scripts')

    @stack('scripts')
</body>

</html>
