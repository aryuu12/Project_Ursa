@extends('admin.admin') @section('admin_content')
    <div class="mb-10">
        <h1 class="text-3xl font-bold text-gray-800">Selamat Datang, Admin</h1>
        <p class="text-gray-500">Kelola dan pantau seluruh kegiatan Ursa Event di sini.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-2xl shadow-sm flex flex-col items-center justify-center relative overflow-hidden">
            <span class="absolute top-4 right-4 text-gray-300">📅</span>
            <h3 class="text-sm font-bold text-gray-400 uppercase">Total Event</h3>
            <p class="text-4xl font-black mt-2 text-gray-800">45</p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-sm flex flex-col items-center justify-center relative overflow-hidden">
            <span class="absolute top-4 right-4 text-gray-300">⏰</span>
            <h3 class="text-sm font-bold text-gray-400 uppercase">Event Aktif</h3>
            <p class="text-4xl font-black mt-2 text-gray-800">12</p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-sm flex flex-col items-center justify-center relative overflow-hidden">
            <span class="absolute top-4 right-4 text-gray-300">👥</span>
            <h3 class="text-sm font-bold text-gray-400 uppercase">Total Peserta</h3>
            <p class="text-4xl font-black mt-2 text-gray-800">120</p>
        </div>
    </div>
@endsection