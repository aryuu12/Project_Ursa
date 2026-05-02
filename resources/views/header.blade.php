<nav style="display: flex; justify-content: space-between; align-items: center; padding: 20px 5%; background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.05); position: sticky; top: 0; z-index: 1000;">
    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 40px;">
    </div>

    <ul style="list-style: none; display: flex; gap: 25px; margin: 0; padding: 0; align-items: center;">
        <li><a href="{{ url('/') }}" style="text-decoration: none; color: #333; font-weight: bold; font-size: 12px; letter-spacing: 0.5px;">BERANDA</a></li>
        <li><a href="{{ url('/event') }}" style="text-decoration: none; color: #333; font-weight: bold; font-size: 12px; letter-spacing: 0.5px;">EVENT</a></li>
        <li><a href="#" style="text-decoration: none; color: #333; font-weight: bold; font-size: 12px; letter-spacing: 0.5px;">KONTAK KAMI</a></li>
        
        @auth
            <li>
                <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
                    @csrf
                    <button type="submit" style="background: none; border: 1.5px solid #b31d1d; color: #b31d1d; padding: 6px 15px; border-radius: 20px; font-weight: bold; cursor: pointer; font-size: 11px; transition: 0.3s; text-transform: uppercase;">
                        LOGOUT  
                    </button>
                </form>
            </li>
        @else
            <li><a href="{{ route('login') }}" style="text-decoration: none; background: #b31d1d; color: white; padding: 10px 25px; border-radius: 25px; font-weight: bold; font-size: 12px; transition: 0.3s; box-shadow: 0 4px 6px rgba(179, 29, 29, 0.2);">LOGIN</a></li>
        @endauth
    </ul>
</nav>