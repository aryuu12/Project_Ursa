<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Ursa Event</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0" style="background-color: #b31d1d;">
        <div class="w-full sm:max-w-md mt-6 px-10 py-12 bg-white shadow-xl overflow-hidden sm:rounded-2xl text-center">
            {{ $slot }}
        </div>
    </div>
</body>
</html>