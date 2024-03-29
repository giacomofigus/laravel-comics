<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/scss/app.scss')
    @vite('resources/js/app.js')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- Header --}}
    @include('partials.header')
    {{-- Main --}}
    @yield('mainSection')
    {{-- Footer --}}
    @include('partials.footer')
</body>
</html>