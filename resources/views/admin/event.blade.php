@extends('admin.admin') 

@section('admin_content')

<script src="https://cdn.tailwindcss.com"></script>

<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/line-clamp@0.4.4/dist/tailwindcss-line-clamp.min.js"></script>

<script>
tailwind.config = {
    plugins: [tailwindcssLineClamp],
}
</script>

<!-- Red Banner Header -->
<div class="bg-red-700 py-4 px-10">
    <h1 class="text-white text-2xl font-bold">Event</h1>
</div>

<!-- Container -->
<div class="max-w-6xl mx-auto px-6 py-10 overflow-x-hidden">

    @forelse ($events as $event)
    <div class="mb-12 pb-12 border-b border-gray-400">

        <!-- Judul -->
        <h2 class="text-2xl font-bold mb-6 text-gray-900">
            {{ $event->nama_event }}
        </h2>

        <div class="flex flex-col md:flex-row gap-8">

            <!-- FOTO -->
            <div class="w-full md:w-1/3">
                <div class="aspect-[3/4] bg-indigo-900 rounded-lg shadow-lg flex items-center justify-center text-white text-center p-2 border-4 border-white">

                    @if($event->foto)
                        <img src="{{ asset($event->foto) }}"
                             class="w-full h-full object-cover rounded-lg">
                    @else
                        <p>No Image</p>
                    @endif

                </div>
            </div>

            <!-- DESKRIPSI -->
            <div class="w-full md:w-2/3 max-w-full overflow-hidden text-gray-800 text-sm leading-relaxed">

                <!-- Tanggal -->
                <h3 class="text-xl font-bold mb-2">
                    Tanggal {{ \Carbon\Carbon::parse($event->tanggal)->format('d-m-Y') }}
                </h3>

              <p class="mb-4 text-sm break-all max-w-full overflow-hidden">
                {{ \Illuminate\Support\Str::limit($event->deskripsi, 50) }}
             </p>

                <!-- INFO -->
                <ul class="space-y-2 mb-4 font-medium">
                    <li class="flex items-center gap-2">
                        📅 <strong>Tanggal:</strong>
                        {{ \Carbon\Carbon::parse($event->tanggal)->format('d F Y') }}
                    </li>

                    <li class="flex items-center gap-2">
                        ⏰ <strong>Jam:</strong>
                        {{ $event->jam }}
                    </li>

                    <li class="flex items-center gap-2">
                        📌 <strong>Status:</strong>
                        {{ $event->status }}
                    </li>
                </ul>

            </div>
        </div>
    </div>

    @empty
        <p class="text-center text-gray-500">Belum ada event</p>
    @endforelse

</div>

@endsection