@extends('layouts.app')

@section('content')
<style>
    /* Hero Section */
    .hero {
        position: relative;
        padding: 80px 0;
        background: linear-gradient(rgba(30, 41, 59, 0.7), rgba(30, 41, 59, 0.7)), 
                    url("{{ asset('images/gedung.png') }}");
        background-size: cover;
        background-position: center;
        text-align: center;
        color: white;
        margin: 20px;
        border-radius: 20px;
    }
    .hero-logo { width: 100px; margin-bottom: 20px; }
    .hero h1 { font-size: 2rem; max-width: 800px; margin: 0 auto 20px; font-weight: bold; }
    
    /* Tombol */
    .btn-custom {
        display: inline-block;
        background-color: #b31d1d;
        color: white;
        padding: 12px 30px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: bold;
    }

    /* Slider Poster */
    .event-section { padding: 40px 5%; text-align: center; }
    .poster-wrapper {
        display: flex;
        justify-content: center;
        gap: 20px;
        overflow-x: auto;
        padding: 20px 0;
    }
    .poster-card { width: 220px; border-radius: 15px; shadow: 0 4px 10px rgba(0,0,0,0.1); }

    /* Info Download */
    .download-info { background: #f9f9f9; padding: 40px; border-radius: 20px; margin: 20px; }
</style>

<main>
    <section class="hero">
        <img src="{{ asset('images/logo.png') }}" class="hero-logo">
        <h1>Platform resmi untuk informasi event kami yang bergerak di bidang teknologi dan inovasi digital.</h1>
        <a href="#" class="btn-custom">Eksplorasi Event</a>
    </section>

    <section class="event-section">
        <div class="poster-wrapper">
            <img src="{{ asset('images/poster.png') }}" class="poster-card">
            <img src="{{ asset('images/poster.png') }}" class="poster-card">
            <img src="{{ asset('images/poster.png') }}" class="poster-card">
        </div>
    </section>

    <section class="download-info">
        <p>Untuk pembelian tiket acara, silakan gunakan aplikasi mobile resmi kami.</p>
        <a href="#" class="btn-custom" style="margin: 15px 0;">Download App</a>
        <p style="font-size: 0.9rem; color: #666;">Memudahkan Anda dalam memesan tiket dengan cepat dan aman.</p>
    </section>
</main>
@endsection