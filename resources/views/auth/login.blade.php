<x-guest-layout>
    <div class="mb-8">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-20 mx-auto mb-4">
        <h1 class="text-2xl font-bold text-gray-900 tracking-wider">URSA EVENT</h1>
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />
    @if ($errors->any())
    <div class="mb-4 p-3 rounded-lg bg-red-100 border-l-4 border-red-500 text-left">
        <div class="flex items-start">
            <span class="text-red-600 mr-2 mt-1">⚠️</span>
            <div class="text-sm text-red-600 font-medium">
                {{ $errors->first() }}
            </div>
        </div>
    </div>
@endif

    <form method="POST" action="{{ route('login') }}" class="text-left">
        @csrf

        <div class="mb-5">
            <label class="block text-sm font-bold text-gray-700 mb-2">Username/Email</label>
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">👤</span>
                <input type="text" name="email" :value="old('text')" required autofocus 
                    class="block w-full pl-10 pr-3 py-3 bg-gray-100 border-none rounded-lg focus:ring-2 focus:ring-gray-300">
            </div>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-bold text-gray-700 mb-2">Password</label>
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">🔒</span>
                <input type="password" name="password" id="password" required autocomplete="current-password"
                    class="block w-full pl-10 pr-3 py-3 bg-gray-100 border-none rounded-lg focus:ring-2 focus:ring-gray-300">
            </div>
        </div>

        <div class="flex items-center mb-8">
            <input type="checkbox" onclick="togglePassword()" class="rounded border-gray-300 text-red-600 focus:ring-red-500">
            <span class="ml-2 text-sm text-gray-600 font-medium cursor-pointer">Tampilkan password</span>
        </div>

        <div>
            <button type="submit" class="w-full py-3 border-2 border-black rounded-full text-black font-bold hover:bg-black hover:text-white transition duration-300">
                Sign in
            </button>
        </div>
    </form>

    <script>
        function togglePassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</x-guest-layout>