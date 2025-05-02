<x-guest-layout>
    <div class="min-h-screen bg-[#1E1F9D] text-white flex">

        {{-- Sidebar --}}
        <aside class="fixed top-0 left-0 h-full w-80 bg-[#15168a] p-6">
            <div class="flex items-center mb-8">
                <img src="{{ asset('images/Logo.png') }}" alt="FitRadar AI Logo" class="h-20 w-auto mr-2">
                <span class="text-xl font-semibold leading-tight">FITRADAR<br>AI</span>
            </div>

            <nav class="space-y-4">
                {{-- Tinjauan --}}
                <a href="{{ route('halaman-dashboard') }}" class="flex items-center text-gray-300 hover:text-white">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3" />
                    </svg>
                    <span>Tinjauan</span>
                </a>

                {{-- Profil --}}
                <a href="{{ route('halaman-profil') }}" class="flex items-center text-gray-300 hover:text-white">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span>Profil</span>
                </a>

                {{-- Deteksi --}}
                <a href="{{ route('deteksi') }}" class="flex items-center text-gray-300 hover:text-white">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5v.01M12 12v.01M12 19v.01" />
                    </svg>
                    <span>Deteksi</span>
                </a>

                {{-- Makanan --}}
                <a href="{{ route('halaman-makanan') }}" class="flex items-center text-gray-300 hover:text-white">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 7v-1c0-1.1.9-2 2-2h12a2 2 0 012 2v1m-1 5h-.586a1 1 0 00-.707.293l-5 5a1 1 0 00-1.414 0l-5-5" />
                    </svg>
                    <span>Makanan</span>
                </a>
            </nav>
        </aside>

        {{-- Main Content --}}
        <main class="flex-1 pl-800 p-800">  {{-- Menambah padding kiri lebih besar untuk memberi ruang lebih banyak --}}
    <h1 class="text-2xl font-semibold mb-6 text-center">Deteksi Makanan</h1>

    <div class="bg-white rounded-lg shadow-md p-8">  {{-- Menambah padding pada kontainer utama --}}
        <div class="mb-8">
            <img src="{{ asset('images/nasi_goreng.jpg') }}" alt="Nasi Goreng Spesial" class="w-full h-auto rounded-md"> {{-- Updated image class --}}
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-8">Hasil Deteksi Makanan: <span class="font-bold">Nasi Goreng Spesial</span></h2>
            <p class="mb-6">Informasi Nutrisi (Perkiraan):</p>
            <ul class="list-disc ml-6 mb-8">
                <li>Kalori: <span class="font-semibold">650 kkal</span></li>
                <li>Protein: <span class="font-semibold">20g</span></li>
                <li>Lemak: <span class="font-semibold">30g</span></li>
                <li>Karbohidrat: <span class="font-semibold">70g</span></li>
                <li>Serat: <span class="font-semibold">5g</span></li>
            </ul>
            <p class="mb-6">Porsi: <span class="font-semibold">1 piring (250g)</span></p>
            <p>Akurasi: <span class="font-semibold">90%</span></p>
        </div>
    </div>
</main>
    </div>
</x-guest-layout>
