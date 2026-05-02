<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Event - URSA EVENT</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome Link untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-white flex h-screen overflow-hidden">
@extends('admin.admin') @section('admin_content')
    <!-- MAIN CONTENT -->
    <main class="flex-grow p-8 bg-white overflow-y-auto">
        <!-- Gray Container -->
        <div class="bg-[#D9D9D9] rounded-[30px] p-10 min-h-full">
            
            <header class="mb-8">
                <h2 class="text-2xl font-bold text-gray-900">Edit Event</h2>
                <p class="text-gray-600 mt-1">Ubahlah detail informasi event di bawah ini</p>
            </header>

            <form action="#" method="POST" class="space-y-6 max-w-4xl">
                @csrf
                
                <!-- Upload Section -->
                <div class="space-y-3">
                    <label class="block text-xl font-semibold text-gray-800">
                        Upload Foto Event <span class="text-sm">★</span>
                    </label>
                    <div class="w-64 h-40 bg-gray-400 rounded-xl flex flex-col items-center justify-center text-center p-4 border-2 border-transparent hover:border-gray-600 cursor-pointer transition">
                        <i class="fas fa-cloud-upload-alt text-4xl text-gray-800 mb-2"></i>
                        <p class="text-[10px] font-medium text-gray-700">Klik atau Tarik File Foto<br>(max 5 MB)</p>
                    </div>
                </div>

                <!-- Input Nama Event -->
                <div class="space-y-2">
                    <label class="block text-xl font-semibold text-gray-800">Nama Event</label>
                    <input type="text" name="nama_event" class="w-full bg-white border border-gray-300 rounded-lg py-3 px-4 shadow-inner focus:outline-none focus:ring-2 focus:ring-gray-400">
                </div>

                <!-- Input Deskripsi -->
                <div class="space-y-2">
                    <label class="block text-xl font-semibold text-gray-800">Deskripsi Event</label>
                    <textarea name="deskripsi" rows="3" class="w-full bg-white border border-gray-300 rounded-lg py-3 px-4 shadow-inner focus:outline-none focus:ring-2 focus:ring-gray-400"></textarea>
                </div>

                <!-- Input Tanggal -->
                <div class="space-y-2">
                    <label class="block text-xl font-semibold text-gray-800">Tanggal Event</label>
                    <input type="text" name="tanggal" class="w-full bg-white border border-gray-300 rounded-lg py-3 px-4 shadow-inner focus:outline-none focus:ring-2 focus:ring-gray-400">
                </div>

                <!-- Input Jam -->
                <div class="space-y-2">
                    <label class="block text-xl font-semibold text-gray-800">Jam Mulai</label>
                    <input type="text" name="jam_mulai" class="w-full bg-white border border-gray-300 rounded-lg py-3 px-4 shadow-inner focus:outline-none focus:ring-2 focus:ring-gray-400">
                </div>

                <!-- Input Lokasi & Buttons -->
                <div class="flex flex-col md:flex-row items-end gap-6">
                    <div class="flex-grow w-full space-y-2">
                        <label class="block text-xl font-semibold text-gray-800">Lokasi Event</label>
                        <input type="text" name="lokasi" class="w-full bg-white border border-gray-300 rounded-lg py-3 px-4 shadow-inner focus:outline-none focus:ring-2 focus:ring-gray-400">
                    </div>
                    
                    <!-- Button Group -->
                    <div class="flex gap-4 pb-1">
                        <button type="submit" class="bg-black text-white px-8 py-2 rounded-lg font-bold hover:bg-gray-800 transition shadow-md">
                            Simpan
                        </button>
                        <button type="button" class="bg-black text-white px-10 py-2 rounded-lg font-bold hover:bg-gray-800 transition shadow-md">
                            Batal
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </main>
@endsection
</body>
</html>