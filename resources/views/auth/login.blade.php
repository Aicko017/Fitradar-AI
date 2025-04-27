<x-guest-layout>
    <div class="bg-white flex items-center justify-center min-h-screen">
        <div class="w-full max-w-sm space-y-6">

            <!-- Logo -->
            <div class="text-center">
                <img src="{{ asset('images/Lgs.png') }}" alt="Logo" class="h-24 mx-auto mb-4">
                <h1 class="text-3xl font-bold text-[#1E1F9D]">FITRADAR AI</h1>
                <p class="text-[#1E1F9D] text-sm mt-1">Health & Fitness</p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
<x-input-error :messages="$errors->get('password')" class="mt-2" />

            <!-- Form -->
            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <!-- Email -->
                <div>
                    <label for="email" class="sr-only">Alamat Email</label>
                    <input id="email" name="email" type="email" :value="old('email')" required autofocus
                        class="w-full px-4 py-2 border border-[#1E1F9D] rounded focus:outline-none focus:ring-2 focus:ring-[#1E1F9D]"
                        placeholder="Alamat Email">
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="sr-only">Kata Sandi</label>
                    <input id="password" name="password" type="password" required
                        class="w-full px-4 py-2 border border-[#1E1F9D] rounded focus:outline-none focus:ring-2 focus:ring-[#1E1F9D]"
                        placeholder="Kata sandi">
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input id="remember_me" type="checkbox" name="remember" class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                        Ingat saya
                    </label>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit"
                        class="w-full bg-[#1E1F9D] text-white py-2 rounded shadow hover:bg-blue-800 transition">
                        Masuk
                    </button>
                </div>
            </form>

            <!-- Links -->
            <div class="text-center text-sm space-y-2">
                @if (Route::has('password.request'))
                    <a class="text-[#1E1F9D] hover:underline" href="{{ route('password.request') }}">
                        Lupa Kata Sandi?
                    </a>
                @endif
                <br>
                <span>Belum punya akun?
                    <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Daftar</a>
                </span>
            </div>

        </div>
    </div>
</x-guest-layout>
