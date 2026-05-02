<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Event</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
@extends('admin.admin') @section('admin_content')
    <!-- Red Banner Header -->
    <div class="bg-red-700 py-4 px-10">
        <h1 class="text-white text-2xl font-bold">Event</h1>
    </div>

    <!-- Event List Container -->
    <div class="max-w-6xl mx-auto px-6 py-10">
        
        <!-- Loop Event Item -->
        @for ($i = 0; $i < 3; $i++)
        <div class="mb-12 pb-12 {{ $i < 2 ? 'border-b border-gray-400' : '' }}">
            <h2 class="text-2xl font-bold mb-6 text-gray-900">Konser Nidji</h2>
            
            <div class="flex flex-col md:flex-row gap-8">
                <!-- Left: Poster Image Placeholder -->
                <div class="w-full md:w-1/3">
                    <div class="aspect-[3/4] bg-indigo-900 rounded-lg shadow-lg flex items-center justify-center text-white text-center p-6 border-4 border-white">
                        <div>
                            <p class="text-sm font-bold opacity-80">AOM 11.0</p>
                            <h3 class="text-4xl font-black my-4">NIDJI</h3>
                            <p class="text-xs mt-10">22 NOVEMBER 2K25</p>
                            <p class="text-[10px] uppercase mt-2">Lapangan Hijau A3 Politeknik Negeri Jember</p>
                            <p class="bg-blue-600 inline-block px-3 py-1 mt-4 rounded-md font-bold">Rp. 65.000,-</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Description Content -->
                <div class="w-full md:w-2/3 text-gray-800 text-sm leading-relaxed">
                    <h3 class="text-xl font-bold mb-2">20/11/2025 - 1/1/2025</h3>
                    <p class="mb-4">Bersiaplah untuk malam paling spektakuler di tahun ini!</p>
                    <p class="mb-4">
                        AOM 11.0 (Admiration of Management) hadir kembali dengan tema "Shine Bright Like a Star", persembahan dari Himpunan Mahasiswa Jurusan Administrasi Bisnis Politeknik Negeri Jember (HMJ ABIS).
                    </p>
                    <p class="mb-4">
                        Tahun ini, AOM menghadirkan penampilan spesial dari band legendaris Nidji, yang siap mengguncang panggung dengan lagu-lagu terbaik mereka! Jadilah bagian dari momen bersejarah ini, rayakan semangat muda, kreativitas, dan kebersamaan di bawah gemerlap cahaya bintang. 🌟
                    </p>
                    
                    <ul class="space-y-2 mb-4 font-medium">
                        <li class="flex items-center gap-2">
                            <span>📅</span> <strong>Tanggal:</strong> 22 November 2025
                        </li>
                        <li class="flex items-center gap-2">
                            <span>📍</span> <strong>Lokasi:</strong> Lapangan Hijau A3, Politeknik Negeri Jember
                        </li>
                        <li class="flex items-center gap-2">
                            <span>🎟️</span> <strong>Harga Tiket:</strong> Rp. 65.000
                        </li>
                    </ul>

                    <p class="mb-6 italic">
                        Dapatkan tiketmu sekarang melalui aplikasi resmi dan nikmati kemudahan pembelian tiket secara digital!
                    </p>

                    <p class="font-semibold">
                        Mari bersinar bersama dalam malam penuh musik, cahaya, dan kebahagiaan di AOM 11.0 – Shine Bright Like a Star!
                    </p>
                </div>
            </div>
        </div>
        @endfor

    </div>
    @endsection
</body>
</html>