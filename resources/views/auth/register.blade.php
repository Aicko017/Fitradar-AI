<x-guest-layout>

    <div class="w-full max-w-sm mx-auto space-y-6 py-10">

        <!-- Logo -->
        <div class="text-center">
            <img src="{{ asset('images/fitradar-icon.png') }}" alt="Logo" class="h-24 mx-auto mb-4">
            <h1 class="text-3xl font-bold text-[#1E1F9D]">FITRADAR AI</h1>
            <p class="text-[#1E1F9D] text-sm mt-1">Health & Fitness</p>
        </div>

        <!-- Form Daftar -->
        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <!-- Nama -->
            <div>
                <input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus
                    class="w-full px-4 py-2 border border-[#1E1F9D] rounded focus:outline-none focus:ring-2 focus:ring-[#1E1F9D]"
                    placeholder="Nama">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required
                    class="w-full px-4 py-2 border border-[#1E1F9D] rounded focus:outline-none focus:ring-2 focus:ring-[#1E1F9D]"
                    placeholder="Alamat Email">
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <input id="password" name="password" type="password" required
                    class="w-full px-4 py-2 border border-[#1E1F9D] rounded focus:outline-none focus:ring-2 focus:ring-[#1E1F9D]"
                    placeholder="Kata Sandi">
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Konfirmasi Password -->
            <div>
                <input id="password_confirmation" name="password_confirmation" type="password" required
                    class="w-full px-4 py-2 border border-[#1E1F9D] rounded focus:outline-none focus:ring-2 focus:ring-[#1E1F9D]"
                    placeholder="Konfirmasi Kata Sandi">
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tombol Daftar -->
            <div>
                <button type="submit"
                    class="w-full bg-[#1E1F9D] text-white py-2 rounded shadow hover:bg-blue-800 transition">
                    Daftar
                </button>
            </div>
        </form>

        <!-- Link ke Login -->
        <div class="text-center text-sm">
            <span>Sudah punya akun?
                <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Masuk</a>
            </span>
        </div>

    </div>

</x-guest-layout>
