<x-app-layout>
    <div class="min-h-screen bg-[#F4F4F4] text-gray-800 flex">
        <x-slot name="header">
            <meta name="csrf-token" content="{{ csrf_token() }}">
        </x-slot>

        {{-- Sidebar --}}
        <aside class="fixed top-0 left-0 h-full w-64 bg-[#15168a] text-white p-6">
            <div class="flex items-center mb-8">
                <img src="{{ asset('images/Logo.png') }}" alt="FitRadar AI Logo" class="h-20 w-auto mr-2">
                <span class="text-xl font-semibold leading-tight">FITRADAR<br>AI</span>
            </div>

            <nav class="space-y-4">
                {{-- Sidebar konsisten --}}
                <a href="{{ route('halaman-dashboard') }}" class="flex items-center text-gray-300 hover:text-white">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3" />
                    </svg>
                    <span>Tinjauan</span>
                </a>

                <a href="{{ route('halaman-profil') }}" class="flex items-center text-gray-300 hover:text-white">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span>Profil</span>
                </a>

                <a href="{{ route('deteksi') }}" class="flex items-center text-white bg-[#1E1F9D] px-3 py-2 rounded-lg">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5v.01M12 12v.01M12 19v.01" />
                    </svg>
                    <span>Deteksi</span>
                </a>

                <a href="{{ route('halaman-makanan') }}" class="flex items-center text-gray-300 hover:text-white">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 7v-1c0-1.1.9-2 2-2h12a2 2 0 012 2v1m-1 5h-.586a1 1 0 00-.707.293l-5 5a1 1 0 00-1.414 0l-5-5" />
                    </svg>
                    <span>Makanan</span>
                </a>

                <a href="{{ route('halaman-olahraga') }}" class="flex items-center text-gray-300 hover:text-white">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 7v-1c0-1.1.9-2 2-2h12a2 2 0 012 2v1m-1 5h-.586a1 1 0 00-.707.293l-5 5a1 1 0 00-1.414 0l-5-5" />
                    </svg>
                    <span>Olahraga</span>
                </a>
            </nav>
        </aside>

        {{-- Main Content --}}
        <main class="flex-1 pl-80 p-8">
            <h1 class="text-2xl font-semibold mb-6 text-center">Unggah Gambar Makanan</h1>

            {{-- Upload Gambar --}}
            <div class="max-w-md mx-auto bg-white rounded-xl shadow-md p-6 text-center">
                <label for="imageUpload" class="block text-gray-700 font-medium mb-2">
                    Pilih Gambar Makanan
                </label>

                <input type="file" id="imageUpload" accept="image/*" class="hidden">

                <label for="imageUpload" class="cursor-pointer inline-block bg-[#1E1F9D] hover:bg-[#15168a] text-white font-semibold py-2 px-6 rounded-full shadow-lg transition duration-200">
                    📁 Unggah Gambar
                </label>

                <div class="mt-4">
                    <img id="capturedImage" src="#" alt="Preview Gambar" class="mx-auto rounded-lg w-full max-w-xs hidden border border-gray-200 shadow">
                </div>
            </div>

            {{-- Hasil Deteksi --}}
            <div id="resultContainer" class="hidden max-w-md mx-auto bg-white rounded-2xl shadow-md p-6 mt-8">
                <h2 class="text-xl font-bold text-center text-[#1E1F9D] mb-4">
                    Hasil Deteksi: <span id="foodName" class="font-semibold text-black"></span>
                </h2>
                <div class="flex justify-center mb-4">
                    <img id="previewResult" src="#" alt="Hasil Deteksi" class="rounded-xl w-full max-w-xs shadow-lg border border-gray-200">
                </div>
                <div class="text-sm text-gray-700">
                    <p class="font-semibold mb-2">Informasi Nutrisi (Perkiraan):</p>
                    <ul class="list-disc list-inside space-y-1 mb-4">
                        <li>Kalori: <span id="calories" class="font-bold text-black"></span></li>
                        <li>Protein: <span id="protein" class="font-bold text-black"></span></li>
                        <li>Lemak: <span id="fat" class="font-bold text-black"></span></li>
                        <li>Karbohidrat: <span id="carbs" class="font-bold text-black"></span></li>
                        <li>Serat: <span id="fiber" class="font-bold text-black"></span></li>
                    </ul>
                    <p class="mb-1">Porsi: <span id="servingSize" class="font-semibold text-black"></span></p>
                    <p>Akurasi: <span id="accuracy" class="font-semibold text-black"></span></p>
                </div>
            </div>
        </main>
    </div>

    {{-- Script JS dari file deteksi.js --}}
    @push('scripts')
        @vite('resources/js/deteksi.js')
    @endpush
</x-app-layout>
