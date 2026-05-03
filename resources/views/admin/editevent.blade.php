@extends('admin.admin')

@section('admin_content')
<main class="flex-grow p-8 bg-[#F8FAFC] overflow-y-auto">
    <div class="max-w-4xl mx-auto">
        
        {{-- Header --}}
        <header class="mb-10">
            {{-- Button Kembali yang telah diperbarui --}}
            <a href="{{ route('admin.event') }}" class="group inline-flex items-center gap-3 mb-6 px-4 py-2 bg-white border border-slate-200 rounded-xl text-[10px] font-black uppercase tracking-[0.15em] text-slate-500 shadow-sm transition-all hover:shadow-md hover:border-slate-300 hover:-translate-x-1">
                <svg class="h-4 w-4 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span>Kembali</span>
            </a>

            <h2 class="text-3xl font-black text-slate-900 tracking-tight">Edit Event</h2>
            <p class="text-slate-500 mt-1 font-medium italic text-sm">
                Perbarui informasi untuk event: <span class="text-indigo-600 font-bold not-italic">"{{ $event->nama_event }}"</span>
            </p>
        </header>

        {{-- Form Edit --}}
        <div class="bg-white rounded-[32px] border border-slate-100 shadow-sm p-8 md:p-12 transition-all hover:shadow-xl hover:shadow-slate-200/50">
            <form action="{{ route('admin.updateevent', $event->id_event) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    {{-- Nama Event --}}
                    <div class="md:col-span-2">
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-3">Nama Event</label>
                        <input type="text" name="nama_event" value="{{ old('nama_event', $event->nama_event) }}" 
                            class="w-full px-6 py-4 bg-slate-50 border border-transparent rounded-2xl focus:ring-2 focus:ring-indigo-500 focus:bg-white font-bold text-slate-700 transition-all outline-none" required>
                    </div>

                    {{-- Tanggal --}}
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-3">Tanggal Pelaksanaan</label>
                        <input type="date" name="tanggal" value="{{ old('tanggal', $event->tanggal) }}" 
                            class="w-full px-6 py-4 bg-slate-50 border border-transparent rounded-2xl focus:ring-2 focus:ring-indigo-500 focus:bg-white font-bold text-slate-700 transition-all outline-none" required>
                    </div>

                    {{-- Jam --}}
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-3">Waktu (WIB)</label>
                        <input type="text" name="jam" value="{{ old('jam', $event->jam) }}" placeholder="Contoh: 19:00"
                            class="w-full px-6 py-4 bg-slate-50 border border-transparent rounded-2xl focus:ring-2 focus:ring-indigo-500 focus:bg-white font-bold text-slate-700 transition-all outline-none" required>
                    </div>

                    {{-- Status --}}
                    <div class="md:col-span-2">
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-3">Status Event</label>
                        <select name="status" class="w-full px-6 py-4 bg-slate-50 border border-transparent rounded-2xl focus:ring-2 focus:ring-indigo-500 focus:bg-white font-bold text-slate-700 transition-all outline-none">
                            <option value="AKTIF" {{ $event->status == 'AKTIF' ? 'selected' : '' }}>AKTIF</option>
                            <option value="SELESAI" {{ $event->status == 'SELESAI' ? 'selected' : '' }}>SELESAI</option>
                            <option value="BATAL" {{ $event->status == 'BATAL' ? 'selected' : '' }}>BATAL</option>
                        </select>
                    </div>

                    {{-- Deskripsi --}}
                    <div class="md:col-span-2">
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-3">Deskripsi Event</label>
                        <textarea name="deskripsi" rows="5" 
                            class="w-full px-6 py-4 bg-slate-50 border border-transparent rounded-2xl focus:ring-2 focus:ring-indigo-500 focus:bg-white font-medium text-slate-600 leading-relaxed transition-all outline-none" required>{{ old('deskripsi', $event->deskripsi) }}</textarea>
                    </div>

                    {{-- Update Foto --}}
                    <div class="md:col-span-2">
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-3">Foto Poster (Kosongkan jika tidak diganti)</label>
                        <div class="flex flex-col md:flex-row items-center gap-6 p-6 bg-slate-50 rounded-3xl border-2 border-dashed border-slate-200">
                            @if($event->foto)
                                <div class="relative group/img">
                                    <img src="{{ asset($event->foto) }}" class="w-32 h-40 object-cover rounded-2xl shadow-md border-4 border-white">
                                    <div class="absolute inset-0 bg-black/20 opacity-0 group-hover/img:opacity-100 transition-opacity rounded-2xl"></div>
                                </div>
                            @endif
                            <input type="file" name="foto" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-6 file:rounded-full file:border-0 file:text-[10px] file:font-black file:uppercase file:bg-slate-900 file:text-white hover:file:bg-indigo-600 transition-all">
                        </div>
                    </div>
                </div>

                {{-- Action Button --}}
                <div class="pt-6 flex justify-end">
                    <button type="submit" class="px-10 py-4 bg-slate-900 text-white text-[11px] font-black uppercase tracking-[0.25em] rounded-2xl hover:bg-indigo-600 transition-all shadow-xl shadow-slate-200 active:scale-95">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection