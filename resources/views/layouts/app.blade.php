<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Slots')</title>

    @include('layouts.styles')
</head>
<body>
    <header>
        @include('layouts.header')
    </header>
    <section class="main">
        @include('layouts.menu')
        @yield('content')
    </section>
    <section>
        @include('layouts.footer')
    </section>
    @include('layouts.scripts')
</body>
</html>