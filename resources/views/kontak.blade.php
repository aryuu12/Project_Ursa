@extends('app')

@section('content')
<main>
    <div style="background-color: #b31d1d; color: white; text-align: center; padding: 40px 0;">
        <h1 style="margin: 0; font-size: 2.5rem;">Kontak Kami</h1>
    </div>

    <div style="max-width: 800px; margin: 40px auto; padding: 0 20px; text-align: center;">
        <p style="color: #666; margin-bottom: 50px;">Kami siap membantu menjawab pertanyaan Anda seputar event</p>

        <div style="display: flex; flex-direction: column; gap: 40px; align-items: flex-start; max-width: 500px; margin: 0 auto;">
            
            <div style="display: flex; align-items: center; gap: 20px;">
                <div style="background-color: #b31d1d; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <img src="{{ asset('images/icon-location.png') }}" alt="Loc" style="width: 30px;">
                </div>
                <div style="text-align: left;">
                    <h3 style="margin: 0; font-size: 1.2rem;">Gedung M.R Estnas</h3>
                    <p style="margin: 5px 0 0; color: #666;">Jl. Teknologi Digital, Kota Inovasi.</p>
                </div>
            </div>

            <div style="display: flex; align-items: center; gap: 20px;">
                <div style="background-color: #b31d1d; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <img src="{{ asset('images/icon-wa.png') }}" alt="WA" style="width: 30px;">
                </div>
                <div style="text-align: left;">
                    <h3 style="margin: 0; font-size: 1.2rem;">WhatsApp Business</h3>
                    <p style="margin: 5px 0 0; color: #666;">+62 812 3456 789</p>
                </div>
            </div>

            <div style="display: flex; align-items: center; gap: 20px;">
                <div style="background-color: #b31d1d; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <img src="{{ asset('images/icon-mail.png') }}" alt="Email" style="width: 30px;">
                </div>
                <div style="text-align: left;">
                    <h3 style="margin: 0; font-size: 1.2rem;">Email Resmi</h3>
                    <p style="margin: 5px 0 0; color: #666;">Hubungi@ursa-event.com</p>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection