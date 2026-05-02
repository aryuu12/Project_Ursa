<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ursa Event - Data Finance</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-white flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-64 flex flex-col py-8 px-6 border-r border-transparent">
        <!-- Logo -->
        <div class="flex items-center gap-3 mb-12">
            <div class="text-red-600 text-3xl">
                <i class="fa-solid fa-paw transform -rotate-45"></i>
            </div>
            <h1 class="font-black text-xl tracking-tighter">URSA EVENT</h1>
        </div>

        <!-- Navigation -->
        <nav class="flex-1">
            <a href="#" class="flex items-center gap-4 text-black font-bold text-lg group">
                <div class="w-8 h-8 bg-black text-white flex items-center justify-center rounded-md">
                    <i class="fa-solid fa-wallet text-sm"></i>
                </div>
                <span>Finance</span>
            </a>
        </nav>

        <!-- Logout -->
        <div class="mt-auto">
            <a href="#" class="flex items-center gap-3 text-black font-semibold text-xl">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Logout</span>
            </a>
        </div>
    </aside>

    <!-- Main Content Container -->
    <main class="flex-1 p-6">
        <div class="bg-[#D1D5DB] w-full h-full rounded-[40px] p-12 overflow-auto">
            
            <!-- Header Text -->
            <div class="mb-10">
                <h2 class="text-3xl font-bold text-gray-800">Data Finance</h2>
                <p class="text-xl text-gray-600 mt-2">Tampilan detail data finance dibawah ini</p>
            </div>

            <!-- Table -->
            <div class="max-w-4xl">
                <table class="w-full border-collapse bg-white">
                    <thead>
                        <tr>
                            <th class="border border-gray-400 p-4 text-left text-xs font-bold uppercase w-1/5">ID Finance</th>
                            <th class="border border-gray-400 p-4 text-left text-xs font-bold uppercase w-1/5">Bagian Penyelenggara</th>
                            <th class="border border-gray-400 p-4 text-left text-xs font-bold uppercase w-1/5">Bagian Admin</th>
                            <th class="border border-gray-400 p-4 text-left text-xs font-bold uppercase w-1/5">Tanggal</th>
                            <th class="border border-gray-400 p-4 text-left text-xs font-bold uppercase w-1/5">Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 -->
                        <tr class="h-16">
                            <td class="border border-gray-400 p-4 text-xs">#FIN-001</td>
                            <td class="border border-gray-400 p-4 text-xs font-medium">Divisi IT</td>
                            <td class="border border-gray-400 p-4 text-xs font-medium">Dewi</td>
                            <td class="border border-gray-400 p-4 text-xs font-medium">11-03-2026</td>
                            <td class="border border-gray-400 p-4 text-xs font-medium">Selesai</td>
                        </tr>
                        <!-- Row 2 -->
                        <tr class="h-16">
                            <td class="border border-gray-400 p-4 text-xs">#FIN-002</td>
                            <td class="border border-gray-400 p-4 text-xs font-medium">Divisi IT</td>
                            <td class="border border-gray-400 p-4 text-xs font-medium">Muhammad</td>
                            <td class="border border-gray-400 p-4 text-xs font-medium">13-03-2026</td>
                            <td class="border border-gray-400 p-4 text-xs font-medium">Belum</td>
                        </tr>
                        <!-- Empty Row for visual consistency -->
                        <tr class="h-16">
                            <td class="border border-gray-400 p-4"></td>
                            <td class="border border-gray-400 p-4"></td>
                            <td class="border border-gray-400 p-4"></td>
                            <td class="border border-gray-400 p-4"></td>
                            <td class="border border-gray-400 p-4"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </main>

</body>
</html>