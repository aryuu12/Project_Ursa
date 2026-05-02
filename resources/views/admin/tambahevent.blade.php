@extends('admin.admin')

@section('admin_content')

<main class="flex-grow p-8 bg-white overflow-y-auto">

    <div class="bg-[#D9D9D9] rounded-[30px] p-10 min-h-full">

        {{-- NOTIFIKASI --}}
        @if(session('success'))
            <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        {{-- ERROR --}}
        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-100 text-red-700 rounded-lg">
                {{ $errors->first() }}
            </div>
        @endif

        <header class="mb-8">
            <h2 class="text-2xl font-bold text-gray-900">Tambah Event</h2>
            <p class="text-gray-600 mt-1">Masukkan detail informasi event</p>
        </header>

        <form action="{{ route('admin.tambahevent.store') }}" 
              method="POST" 
              enctype="multipart/form-data"
              class="space-y-6 max-w-4xl">
            @csrf

            <!-- Upload -->
            <div>
                <label class="font-bold">Upload Foto Event</label>

                <div class="w-64 h-40 bg-gray-400 rounded-xl flex flex-col items-center justify-center relative">
                    <input type="file" name="foto"
                        class="absolute inset-0 opacity-0 cursor-pointer">

                    <i class="fas fa-cloud-upload-alt text-3xl"></i>
                    <p class="text-xs">Klik untuk upload</p>
                </div>
            </div>

            <!-- Nama -->
            <div>
                <label class="block text-xl font-semibold text-gray-800">Nama Event</label>
                <input type="text" name="nama_event" required
                    class="w-full bg-white border border-gray-300 rounded-lg py-3 px-4 shadow-inner">
            </div>

            <!-- Deskripsi -->
            <div>
                <label class="block text-xl font-semibold text-gray-800">Deskripsi Event</label>
                <textarea name="deskripsi" required
                    class="w-full bg-white border border-gray-300 rounded-lg py-3 px-4 shadow-inner"></textarea>
            </div>

            <!-- Tanggal -->
            <div>
                <label class="block text-xl font-semibold text-gray-800">Tanggal Event</label>
                <input type="date" name="tanggal" required
                    class="w-full bg-white border border-gray-300 rounded-lg py-3 px-4 shadow-inner">
            </div>

            <!-- Jam -->
            <div class="flex flex-col md:flex-row items-end gap-6">
                <div class="flex-grow w-full">
                    <label class="block text-xl font-semibold text-gray-800">Jam Mulai</label>
                    <input type="time" name="jam" required
                        class="w-full bg-white border border-gray-300 rounded-lg py-3 px-4 shadow-inner">
                </div>

                <!-- Button -->
                <div class="flex gap-4 pb-1">
                    <button type="submit"
                        class="bg-black text-white px-8 py-2 rounded-lg font-bold hover:bg-gray-800 transition">
                        Simpan
                    </button>

                </div>
            </div>

        </form>

    </div>

</main>

@endsection