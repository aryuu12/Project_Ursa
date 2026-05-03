@extends('admin.admin')

@section('admin_content')
<main class="flex-grow p-8 bg-slate-50 min-h-screen overflow-y-auto">
    <div class="max-w-4xl">

        {{-- HEADER SECTION --}}
        <header class="mb-10 text-left">
            <h1 class="text-3xl font-black text-slate-900 tracking-tight">Daftar Event</h1>
            <p class="text-sm text-slate-500 mt-2 max-w-xl">Manajemen event Ursa Event dalam tampilan ringkas dan profesional.</p>
            
            <div class="mt-6">
                {{-- TOMBOL FIXED: Navy Gelap Solid --}}
                <a href="{{ route('admin.tambahevent') }}" 
                   style="background-color: #0f172a !important; color: white !important; opacity: 1 !important;"
                   class="inline-flex items-center justify-center rounded-xl px-6 py-3 text-[11px] font-black uppercase tracking-widest shadow-xl transition-all hover:bg-slate-800 active:scale-95 border-none">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="stroke: white !important;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Tambah Event
                </a>
            </div>
        </header>

        {{-- LIST SECTION --}}
        <div class="space-y-2">
            @forelse ($events as $event)
                <article class="group flex items-center gap-4 rounded-2xl border border-slate-200 bg-white p-2.5 shadow-sm transition-all hover:border-slate-300 hover:shadow-md">
                    
                    {{-- Thumbnail --}}
                    <div class="relative h-20 w-20 flex-shrink-0 overflow-hidden rounded-lg bg-slate-100 border border-slate-100">
                        @if($event->foto)
                            <img src="{{ asset($event->foto) }}" alt="{{ $event->nama_event }}" class="h-full w-full object-cover transition duration-500 group-hover:scale-110" />
                        @else
                            <div class="flex h-full items-center justify-center text-[7px] font-black text-slate-300 uppercase">No Image</div>
                        @endif
                    </div>

                    {{-- Info Singkat --}}
                    <div class="flex-grow min-w-0">
                        <div class="flex items-center gap-2">
                            <span class="text-[8px] font-black uppercase tracking-widest text-indigo-600">{{ $event->status }}</span>
                        </div>
                        <h2 class="text-sm font-black text-slate-900 uppercase tracking-tight truncate">{{ $event->nama_event }}</h2>
                        
                        <div class="mt-1.5 flex items-center gap-4 text-slate-500">
                            <div class="flex items-center gap-1">
                                <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <span class="text-[10px] font-bold">{{ \Carbon\Carbon::parse($event->tanggal)->format('d M Y') }}</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span class="text-[10px] font-bold">{{ $event->jam }}</span>
                            </div>
                        </div>
                    </div>

                    {{-- Aksi --}}
                    <div class="flex items-center gap-1 pr-1">
                        <a href="{{ route('admin.editevent', $event->id_event) }}" class="p-2 text-slate-400 hover:text-slate-900 transition-colors" title="Edit">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                        </a>
                        <form action="{{ route('admin.hapusevent', $event->id_event) }}" method="POST" onsubmit="return confirm('Hapus?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="p-2 text-slate-400 hover:text-red-500 transition-colors" title="Hapus">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </form>
                    </div>
                </article>
            @empty
                <p class="text-xs text-slate-400 italic">Belum ada data event.</p>
            @endforelse
        </div>
    </div>
</main>
@endsection