@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mb-6">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </div>
        </div>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-l-4 border-red-700">
            <div class="p-8 text-gray-900">
                <h3 class="text-xl font-bold mb-2">Selamat Datang, {{ Auth::user()->name }}! 👋</h3>
                <p class="text-gray-600">{{ __("You're logged in to Project Ursa Event.") }}</p>
                
                <hr class="my-6">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <a href="/" class="p-4 bg-gray-100 rounded-lg hover:bg-gray-200 transition text-center font-bold">
                        🏠 Balik ke Beranda
                    </a>
                    <a href="#" class="p-4 bg-red-700 text-white rounded-lg hover:bg-red-800 transition text-center font-bold">
                        📅 Kelola Event
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection