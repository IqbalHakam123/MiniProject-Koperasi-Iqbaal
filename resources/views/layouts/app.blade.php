<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$pageTitle}}</title>
    @vite("resources/sass/app.scss")
</head>
<body>
    {{-- Manggil file nav --}}
    @include('layouts.nav')
    {{-- yield ibaratnya seperti tanah kapling buat isi dari content --}}
    @yield('content')
    @vite("resources/js/app.js")
</body>
</html>
