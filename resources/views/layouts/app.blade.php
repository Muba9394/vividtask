<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('image/s.ico')}}">
    @include('parts.links')

    </head>

<body>
    {{-- Header --}}
    @include('parts.header')

    {{-- Main --}}
    @yield('main')

    {{-- Footer --}}
    @include('parts.footer')
</body>
</html>