<x-guest-layout>
    <div class="flex flex-col items-center justify-center min-h-screen bg-white">
        {{-- Logo --}}
        <div class="mb-6 ">
            <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="h-60 mx-auto">
        </div>

        {{-- Judul --}}
        <h1 class="text-3xl font-extrabold text-[#1E1F9D] mb-1">FITRADAR AI</h1>
        <p class="text-blue-900 font-medium mb-8 text-center">Health & Fitness</p>

        {{-- Session Status --}}
        <x-auth-session-status class="mb-4" :status="session('status')" />

        {{-- Form --}}
        <form method="POST" action="{{ route('login') }}" class="w-full max-w-sm space-y-4">
            @csrf

            {{-- Email --}}
            <div>
                <input type="email" name="email" id="email" placeholder="Alamat Email"
                    class="w-full px-4 py-2 border border-blue-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
                    :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-1" />
            </div>

            {{-- Password --}}
            <div>
                <input type="password" name="password" id="password" placeholder="Kata sandi"
                    class="w-full px-4 py-2 border border-blue-700 rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
                    required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-1" />
            </div>

            {{-- Submit --}}
            <div>
                <button type="submit"
                    class="w-full bg-[#1E1F9D] hover:bg-[#15168a] text-white font-bold py-2 px-4 rounded shadow transition duration-200">
                    Masuk
                </button>
            </div>

            {{-- Forgot Password --}}
            @if (Route::has('password.request'))
                <div class="text-center">
                    <a class="text-sm text-gray-600 hover:underline" href="{{ route('password.request') }}">
                        Lupa Kata Sandi?
                    </a>
                </div>
            @endif

            {{-- Register --}}
            <div class="text-center text-sm">
                Belum punya akun?
                <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Daftar</a>
            </div>
        </form>
    </div>
</x-guest-layout>
