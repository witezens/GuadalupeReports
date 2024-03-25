<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-white">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Módulo de Reportes</title>

    <meta name="description" content="{{ $description ?? '' }}">
    <meta name="keywords" content="{{ $keywords ?? '' }}">
    <meta name="author" content="{{ $author ?? '' }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">

    {{-- Vite CSS --}}
    @vite(['resources/css/app.css', 'resources/js/guadalupe-reports.js'], 'build/guadalupe-reports')
</head>

<body class="font-sans antialiased h-full overflow-hidden">

<div id="guadalupe-reports" class="h-full">

    @yield('content')

</div>
</body>
</html>
