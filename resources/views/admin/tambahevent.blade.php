@extends('admin.admin')

@section('admin_content')

<main class="flex-grow p-8 bg-[#F8FAFC] overflow-y-auto">
    <div class="max-w-5xl mx-auto">
        

            <div class="flex justify-between items-end">
                <div>
                    <h2 class="text-3xl font-black text-slate-900 tracking-tight">Tambah Event</h2>
                    <p class="text-slate-500 mt-1 font-medium">Lengkapi detail informasi acara Anda di bawah ini.</p>
                </div>
                <div class="hidden md:block">
                    <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest bg-slate-100 px-3 py-1 rounded-full">
                        Event Management &gt; Create
                    </span>
                </div>
            </div>
        </header>

        {{-- NOTIFIKASI --}}
        @if(session('success'))
            <div class="mb-6 p-4 bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 rounded-r-2xl shadow-sm animate-pulse">
                <div class="flex items-center italic">
                    <span class="mr-2">✨</span>
                    <p class="font-bold">{{ session('success') }}</p>
                </div>
            </div>
        @endif

        {{-- ERROR --}}
        @if ($errors->any())
            <div class="mb-6 p-4 bg-rose-50 border-l-4 border-rose-500 text-rose-700 rounded-r-2xl shadow-sm">
                <div class="flex items-center font-bold">
                    <span class="mr-2">⚠️</span>
                    <p>{{ $errors->first() }}</p>
                </div>
            </div>
        @endif

        {{-- FORM CARD --}}
        <div class="bg-white rounded-[32px] shadow-sm border border-slate-100 overflow-hidden transition-all hover:shadow-xl hover:shadow-slate-200/50">
            <form action="{{ route('admin.tambahevent.store') }}" 
                  method="POST" 
                  enctype="multipart/form-data"
                  class="divide-y divide-slate-100">
                @csrf

                {{-- Bagian 1: Visual --}}
                <div class="p-10 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div>
                        <h3 class="text-sm font-black text-slate-900 uppercase tracking-wider">Visual Event</h3>
                        <p class="text-xs text-slate-500 mt-2 leading-relaxed">Gunakan foto berkualitas tinggi untuk poster acara (Rasio 3:4 atau 16:9).</p>
                    </div>
                    <div class="md:col-span-2">
                        <div class="group relative w-full h-56 bg-slate-50 rounded-[2rem] border-2 border-dashed border-slate-200 flex flex-col items-center justify-center transition-all hover:border-indigo-400 hover:bg-indigo-50 cursor-pointer overflow-hidden">
                            <input type="file" name="foto" class="absolute inset-0 opacity-0 cursor-pointer z-10" required>
                            <div class="text-center group-hover:scale-105 transition-transform duration-300">
                                <div class="bg-white p-4 rounded-2xl shadow-sm inline-block mb-3 border border-slate-100">
                                    <svg class="w-8 h-8 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <p class="text-xs font-black text-slate-700 uppercase tracking-widest">Klik untuk pilih poster</p>
                                <p class="text-[10px] text-slate-400 mt-1">PNG, JPG atau JPEG (Maks. 2MB)</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Bagian 2: Informasi Dasar --}}
                <div class="p-10 grid grid-cols-1 md:grid-cols-3 gap-8 bg-white">
                    <div>
                        <h3 class="text-sm font-black text-slate-900 uppercase tracking-wider">Detail Acara</h3>
                        <p class="text-xs text-slate-500 mt-2 leading-relaxed">Nama dan deskripsi yang jelas memudahkan audiens mengenali event Anda.</p>
                    </div>
                    <div class="md:col-span-2 space-y-8">
                        <div>
                            <label class="block text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-3">Nama Event</label>
                            <input type="text" name="nama_event" placeholder="Contoh: URSA MUSIC FEST" required
                                class="w-full bg-slate-50 border border-transparent rounded-2xl py-4 px-6 focus:ring-2 focus:ring-indigo-500 focus:bg-white font-bold text-slate-700 transition-all outline-none">
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-3">Deskripsi</label>
                            <textarea name="deskripsi" rows="5" placeholder="Tuliskan detail acara, bintang tamu, dan informasi lainnya..." required
                                class="w-full bg-slate-50 border border-transparent rounded-2xl py-4 px-6 focus:ring-2 focus:ring-indigo-500 focus:bg-white font-medium text-slate-600 leading-relaxed transition-all outline-none"></textarea>
                        </div>
                    </div>
                </div>

                {{-- Bagian 3: Waktu --}}
                <div class="p-10 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div>
                        <h3 class="text-sm font-black text-slate-900 uppercase tracking-wider">Waktu Pelaksanaan</h3>
                        <p class="text-xs text-slate-500 mt-2">Tentukan jadwal kapan acara akan dimulai.</p>
                    </div>
                    <div class="md:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-3">Tanggal</label>
                            <input type="date" name="tanggal" required
                                class="w-full bg-slate-50 border border-transparent rounded-2xl py-4 px-6 focus:ring-2 focus:ring-indigo-500 focus:bg-white font-bold text-slate-700 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-3">Jam Mulai</label>
                            <input type="time" name="jam" required
                                class="w-full bg-slate-50 border border-transparent rounded-2xl py-4 px-6 focus:ring-2 focus:ring-indigo-500 focus:bg-white font-bold text-slate-700 outline-none transition-all">
                        </div>
                    </div>
                </div>

                {{-- Bagian 4: Action --}}
                <div class="p-10 bg-white flex items-center justify-end gap-12">
                    <a href="{{ route('admin.event') }}" 
                        class="text-[11px] font-black uppercase tracking-[0.2em] text-slate-950 transition-colors">
                        Batal
                    </a>
                    <button type="submit"
                        class="text-[11px] font-black uppercase tracking-[0.2em] text-slate-950 transition-all hover:opacity-60 active:scale-95">
                        Simpan Event
                    </button>
                </div>

            </form>
        </div>
    </div>
</main>

@endsection