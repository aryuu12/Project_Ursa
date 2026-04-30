<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard - Ursa Event</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="flex min-h-screen">
        <aside class="w-64 bg-white shadow-md flex flex-col justify-between">
            <div class="p-6">
                <div class="flex items-center gap-3 mb-10">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8">
                    <span class="font-bold text-lg tracking-wider">URSA EVENT</span>
                </div>

                <nav class="space-y-2">
                    <a href="#" class="flex items-center gap-3 p-3 bg-gray-200 rounded-lg font-semibold text-gray-700">
                        <span>📊</span> Beranda
                    </a>
                    <a href="#" class="flex items-center gap-3 p-3 text-gray-600 hover:bg-gray-50 rounded-lg">
                        <span>📝</span> Edit Beranda
                    </a>
                    <div class="pt-4 pb-2 text-xs font-bold text-gray-400 uppercase">Event</div>
                    <a href="#" class="flex items-center gap-3 p-3 text-gray-600 hover:bg-gray-50 rounded-lg">
                        <span>📅</span> Daftar Event
                    </a>
                    <a href="#" class="flex items-center gap-3 p-3 text-gray-600 hover:bg-gray-50 rounded-lg">
                        <span>➕</span> Tambah Event
                    </a>
                    <a href="#" class="flex items-center gap-3 p-3 text-gray-600 hover:bg-gray-50 rounded-lg">
                        <span>☎️</span> Kontak Kami
                    </a>
                    <a href="#" class="flex items-center gap-3 p-3 text-gray-600 hover:bg-gray-50 rounded-lg">
                        <span>💰</span> Finance
                    </a>
                </nav>
            </div>

            <div class="p-6 border-t">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex items-center gap-3 text-gray-600 hover:text-red-600 font-semibold">
                        <span>🚪</span> Logout
                    </button>
                </form>
            </div>
        </aside>

        <main class="flex-1 p-10">
            <div class="bg-gray-200 rounded-3xl p-10 min-h-full">
                @yield('admin_content')
            </div>
        </main>
    </div>
</body>
</html>