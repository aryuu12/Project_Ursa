<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ursa Event</title>
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Figtree', sans-serif;
            background-color: #f4f4f4; /* Warna background abu-abu muda */
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1; /* Supaya footer tetap di bawah kalau konten sedikit */
        }
    </style>
</head>
<body>

    @include('header')

    <main>
        @yield('content')
    </main>

    @include('footer')

</body>
</html>