<x-app-layout>
    <div class="min-h-screen bg-gray-100 text-gray-800 flex">
        <x-slot name="header">
            <meta name="csrf-token" content="{{ csrf_token() }}">
        </x-slot>

        {{-- Sidebar - Hidden on mobile, visible on desktop --}}
        <aside class="hidden lg:block fixed top-0 left-0 h-full w-64 bg-[#15168a] text-white p-6 shadow-xl z-10">
            <div class="flex items-center mb-10">
                <img src="{{ asset('images/Logo.png') }}" alt="FitRadar AI Logo" class="h-16 lg:h-20 w-auto mr-2">
                <span class="text-lg lg:text-xl font-bold leading-tight">FITRADAR<br>AI</span>
            </div>
            <nav class="space-y-4">
                <a href="{{ route('halaman-dashboard') }}" class="flex items-center gap-3 text-gray-300 hover:text-white transition-all">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3" />
                    </svg>
                    Tinjauan
                </a>
                <a href="{{ route('halaman-profil') }}" class="flex items-center gap-3 text-gray-300 hover:text-white transition-all">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    Profil
                </a>
                <a href="{{ route('deteksi') }}" class="flex items-center gap-3 text-white bg-[#1E1F9D] px-3 py-2 rounded-lg">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01" />
                    </svg>
                    <span>Deteksi</span>
                </a>
                <a href="{{ route('halaman-makanan') }}" class="flex items-center gap-3 text-gray-300 hover:text-white transition-all">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v-1c0-1.1.9-2 2-2h12a2 2 0 012 2v1m-1 5h-.586a1 1 0 00-.707.293l-5 5a1 1 0 00-1.414 0l-5-5" />
                    </svg>
                    Makanan
                </a>
                <a href="{{ route('halaman-olahraga') }}" class="flex items-center gap-3 text-gray-300 hover:text-white transition-all">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v-1c0-1.1.9-2 2-2h12a2 2 0 012 2v1m-1 5h-.586a1 1 0 00-.707.293l-5 5a1 1 0 00-1.414 0l-5-5A1 1 0 004.586 12H4" />
                    </svg>
                    Olahraga
                </a>
            </nav>
        </aside>

        {{-- Mobile Navigation Bar --}}
        <div class="lg:hidden fixed bottom-0 left-0 right-0 bg-[#15168a] text-white shadow-xl z-20">
            <nav class="flex justify-around items-center py-2">
                <a href="{{ route('halaman-dashboard') }}" class="flex flex-col items-center text-gray-300 hover:text-white transition-all p-2">
                    <svg class="h-5 w-5 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3" />
                    </svg>
                    <span class="text-xs">Tinjauan</span>
                </a>
                <a href="{{ route('halaman-profil') }}" class="flex flex-col items-center text-gray-300 hover:text-white transition-all p-2">
                    <svg class="h-5 w-5 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span class="text-xs">Profil</span>
                </a>
                <a href="{{ route('deteksi') }}" class="flex flex-col items-center text-white bg-[#1E1F9D] px-2 py-1 rounded-lg">
                    <svg class="h-5 w-5 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01" />
                    </svg>
                    <span class="text-xs">Deteksi</span>
                </a>
                <a href="{{ route('halaman-makanan') }}" class="flex flex-col items-center text-gray-300 hover:text-white transition-all p-2">
                    <svg class="h-5 w-5 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v-1c0-1.1.9-2 2-2h12a2 2 0 012 2v1m-1 5h-.586a1 1 0 00-.707.293l-5 5a1 1 0 00-1.414 0l-5-5" />
                    </svg>
                    <span class="text-xs">Makanan</span>
                </a>
                <a href="{{ route('halaman-olahraga') }}" class="flex flex-col items-center text-gray-300 hover:text-white transition-all p-2">
                    <svg class="h-5 w-5 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v-1c0-1.1.9-2 2-2h12a2 2 0 012 2v1m-1 5h-.586a1 1 0 00-.707.293l-5 5a1 1 0 00-1.414 0l-5-5A1 1 0 004.586 12H4" />
                    </svg>
                    <span class="text-xs">Olahraga</span>
                </a>
            </nav>
        </div>

        {{-- Main Content --}}
        <main class="flex-1 lg:pl-64 px-4 md:px-6 lg:px-8 py-6 md:py-8 lg:py-12 pb-20 lg:pb-12">
            {{-- Mobile Header with Logo --}}
            <div class="lg:hidden flex items-center justify-center mb-6 bg-[#15168a] text-white p-4 rounded-xl mx-auto max-w-sm">
                <img src="{{ asset('images/Logo.png') }}" alt="FitRadar AI Logo" class="h-12 w-auto mr-2">
                <span class="text-lg font-bold leading-tight">FITRADAR<br>AI</span>
            </div>

            <div class="max-w-4xl mx-auto">
                {{-- Header Section --}}
                <div class="text-center mb-8 lg:mb-12">
                    <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-800 mb-3 lg:mb-4 px-4">
                        🍽️ Deteksi Makanan AI
                    </h1>
                    <p class="text-base lg:text-lg text-gray-600 px-4">
                        Unggah foto makanan untuk mendapatkan informasi nutrisi secara otomatis
                    </p>
                </div>

                {{-- Upload Section --}}
                <div class="bg-white rounded-2xl lg:rounded-3xl shadow-lg lg:shadow-xl p-4 md:p-6 lg:p-8 mb-6 lg:mb-8 border-2 border-gray-100 hover:shadow-xl lg:hover:shadow-2xl transition-shadow duration-300">
                    {{-- Upload Area --}}
                    <div class="relative">
                        <input type="file" id="imageUpload" accept="image/*" class="hidden">
                        
                        {{-- Main Upload Zone - Now clickable --}}
                        <label for="imageUpload" class="block cursor-pointer">
                            <div id="uploadZone" class="border-2 lg:border-3 border-dashed border-[#1E1F9D] rounded-2xl lg:rounded-3xl p-6 md:p-8 lg:p-12 text-center transition-all duration-300 hover:border-[#15168a] hover:bg-gradient-to-br hover:from-blue-50 hover:to-purple-50 group">
                                {{-- Upload Icon --}}
                                <div class="flex justify-center mb-4 lg:mb-6">
                                    <div class="w-16 h-16 lg:w-20 lg:h-20 bg-gradient-to-br from-[#1E1F9D] to-[#15168a] rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-8 h-8 lg:w-10 lg:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                  d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                        </svg>
                                    </div>
                                </div>

                                {{-- Upload Text --}}
                                <div class="space-y-3 lg:space-y-4">
                                    <h3 class="text-lg md:text-xl lg:text-2xl font-bold text-gray-800 group-hover:text-[#1E1F9D] transition-colors">
                                        Unggah Gambar Makanan
                                    </h3>
                                    <p class="text-gray-600 text-sm md:text-base lg:text-lg">
                                        Klik di sini atau drag & drop gambar makanan
                                    </p>
                                    
                                    {{-- File Info --}}
                                    <div class="flex flex-col sm:flex-row justify-center items-center space-y-2 sm:space-y-0 sm:space-x-4 lg:space-x-6 text-xs md:text-sm text-gray-500">
                                        <div class="flex items-center bg-gray-100 px-3 py-2 rounded-full">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                            </svg>
                                            JPG, PNG, JPEG
                                        </div>
                                        <div class="flex items-center bg-gray-100 px-3 py-2 rounded-full">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                            Max 10MB
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>

                        {{-- Preview Area --}}
                        <div id="previewArea" class="hidden mt-6 lg:mt-8">
                            <div class="bg-gradient-to-br from-green-50 to-blue-50 rounded-2xl lg:rounded-3xl p-6 lg:p-8 border-2 border-green-200">
                                <div class="text-center">
                                    <div class="relative inline-block mb-4 lg:mb-6">
                                        <img id="imagePreview" class="rounded-xl lg:rounded-2xl shadow-lg lg:shadow-2xl w-full max-w-xs md:max-w-sm mx-auto border-2 lg:border-4 border-white">
                                        <button id="removeImage" class="absolute -top-2 -right-2 lg:-top-3 lg:-right-3 bg-red-500 hover:bg-red-600 text-white rounded-full w-8 h-8 lg:w-10 lg:h-10 flex items-center justify-center shadow-lg transition-colors duration-200 transform hover:scale-110">
                                            <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    
                                    <div class="space-y-3 lg:space-y-4">
                                        <div class="flex items-center justify-center space-x-2 text-green-700">
                                            <svg class="w-5 h-5 lg:w-6 lg:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <span class="font-semibold text-sm md:text-base">Gambar berhasil diunggah!</span>
                                        </div>
                                        
                                        <p id="fileName" class="text-xs md:text-sm text-gray-600 bg-white/50 px-3 py-2 rounded-full inline-block"></p>
                                        
                                        <div class="flex flex-col sm:flex-row justify-center space-y-3 sm:space-y-0 sm:space-x-4 pt-4">
                                            <button id="analyzeBtn" class="px-6 py-3 lg:px-8 lg:py-3 bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white text-sm md:text-base font-semibold rounded-full shadow-lg transform hover:scale-105 transition-all duration-300">
                                                <svg class="w-4 h-4 lg:w-5 lg:h-5 mr-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                                </svg>
                                                Analisis Sekarang
                                            </button>
                                            <button id="uploadNewBtn" class="px-6 py-3 lg:px-8 lg:py-3 bg-gradient-to-r from-gray-500 to-gray-600 hover:from-gray-600 hover:to-gray-700 text-white text-sm md:text-base font-semibold rounded-full shadow-lg transform hover:scale-105 transition-all duration-300">
                                                <svg class="w-4 h-4 lg:w-5 lg:h-5 mr-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                                                </svg>
                                                Unggah Lagi
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Results Section --}}
                <div id="resultContainer" class="hidden">
                    <div class="bg-white rounded-2xl lg:rounded-3xl shadow-lg lg:shadow-2xl overflow-hidden border-2 border-gray-100">
                        {{-- Results Header --}}
                        <div class="bg-gradient-to-r from-[#1E1F9D] to-[#15168a] p-4 lg:p-6 text-white">
                            <h2 class="text-xl md:text-2xl lg:text-3xl font-bold text-center flex flex-col sm:flex-row items-center justify-center">
                                <svg class="w-6 h-6 lg:w-8 lg:h-8 mb-2 sm:mb-0 sm:mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-center">Hasil Deteksi: <span id="foodName" class="font-semibold"></span></span>
                            </h2>
                        </div>

                        <div class="p-4 md:p-6 lg:p-8">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8">
                                {{-- Image Result --}}
                                <div class="text-center order-2 lg:order-1">
                                    <div class="relative inline-block">
                                        <img id="previewResult" src="#" alt="Hasil Deteksi" class="rounded-xl lg:rounded-2xl w-full max-w-sm md:max-w-md shadow-lg lg:shadow-2xl border-2 lg:border-4 border-white">
                                        <div class="absolute -bottom-2 -right-2 lg:-bottom-3 lg:-right-3 bg-gradient-to-r from-green-500 to-green-600 text-white px-3 py-1 lg:px-4 lg:py-2 rounded-full text-xs lg:text-sm font-bold shadow-lg">
                                            <span id="accuracy" class="flex items-center">
                                                <svg class="w-3 h-3 lg:w-4 lg:h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                {{-- Nutrition Cards --}}
                                <div class="space-y-4 lg:space-y-6 order-1 lg:order-2">
                                    <div>
                                        <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-4 lg:mb-6 flex items-center justify-center lg:justify-start">
                                            <svg class="w-6 h-6 lg:w-7 lg:h-7 mr-2 lg:mr-3 text-[#1E1F9D]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                            </svg>
                                            Informasi Nutrisi
                                        </h3>
                                        
                                        <div class="grid grid-cols-2 gap-3 lg:gap-4 mb-4 lg:mb-6">
                                            {{-- Calories --}}
                                            <div class="bg-gradient-to-br from-orange-50 to-red-50 p-3 lg:p-5 rounded-xl lg:rounded-2xl border-2 border-orange-200 hover:shadow-lg transition-shadow">
                                                <div class="flex items-center justify-between mb-2">
                                                    <span class="text-orange-600 font-semibold text-sm md:text-base">Kalori</span>
                                                    <span class="text-xl lg:text-3xl">🔥</span>
                                                </div>
                                                <p class="text-xl md:text-2xl lg:text-3xl font-bold text-orange-700" id="calories"></p>
                                            </div>

                                            {{-- Protein --}}
                                            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 p-3 lg:p-5 rounded-xl lg:rounded-2xl border-2 border-blue-200 hover:shadow-lg transition-shadow">
                                                <div class="flex items-center justify-between mb-2">
                                                    <span class="text-blue-600 font-semibold text-sm md:text-base">Protein</span>
                                                    <span class="text-xl lg:text-3xl">💪</span>
                                                </div>
                                                <p class="text-xl md:text-2xl lg:text-3xl font-bold text-blue-700" id="protein"></p>
                                            </div>

                                            {{-- Fat --}}
                                            <div class="bg-gradient-to-br from-yellow-50 to-orange-50 p-3 lg:p-5 rounded-xl lg:rounded-2xl border-2 border-yellow-200 hover:shadow-lg transition-shadow">
                                                <div class="flex items-center justify-between mb-2">
                                                    <span class="text-yellow-600 font-semibold text-sm md:text-base">Lemak</span>
                                                    <span class="text-xl lg:text-3xl">🥑</span>
                                                </div>
                                                <p class="text-xl md:text-2xl lg:text-3xl font-bold text-yellow-700" id="fat"></p>
                                            </div>

                                            {{-- Carbs --}}
                                            <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-3 lg:p-5 rounded-xl lg:rounded-2xl border-2 border-green-200 hover:shadow-lg transition-shadow">
                                                <div class="flex items-center justify-between mb-2">
                                                    <span class="text-green-600 font-semibold text-sm md:text-base">Karbohidrat</span>
                                                    <span class="text-xl lg:text-3xl">🍞</span>
                                                </div>
                                                <p class="text-xl md:text-2xl lg:text-3xl font-bold text-green-700" id="carbs"></p>
                                            </div>
                                        </div>

                                        {{-- Additional Info --}}
                                        <div class="bg-gradient-to-r from-gray-50 to-gray-100 rounded-xl lg:rounded-2xl p-4 lg:p-6 space-y-3 lg:space-y-4 border-2 border-gray-200">
                                            <div class="flex items-center justify-between">
                                                <span class="text-gray-600 font-semibold flex items-center text-sm md:text-base">
                                                    <span class="text-xl lg:text-2xl mr-2">🌾</span>
                                                    Serat
                                                </span>
                                                <span class="font-bold text-gray-800 text-base lg:text-lg" id="fiber"></span>
                                            </div>
                                            <hr class="border-gray-300">
                                            <div class="flex items-center justify-between">
                                                <span class="text-gray-600 font-semibold flex items-center text-sm md:text-base">
                                                    <span class="text-xl lg:text-2xl mr-2">🍽️</span>
                                                    Porsi
                                                </span>
                                                <span class="font-bold text-gray-800 text-base lg:text-lg" id="servingSize"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    {{-- Script --}}
    @push('scripts')
<script>
    const video = document.getElementById('cameraPreview');
    const canvas = document.getElementById('cameraCanvas');
    const resultContainer = document.getElementById('resultContainer');
    const capturedImage = document.getElementById('capturedImage');
    const foodName = document.getElementById('foodName');
    const calories = document.getElementById('calories');
    const protein = document.getElementById('protein');
    const fat = document.getElementById('fat');
    const carbs = document.getElementById('carbs');
    const fiber = document.getElementById('fiber');
    const servingSize = document.getElementById('servingSize');
    const accuracy = document.getElementById('accuracy');
    const recommendationContainer = document.getElementById('recommendationContainer');
    const recommendationsList = document.getElementById('recommendationsList');

    // Minta akses kamera
    navigator.mediaDevices.getUserMedia({ video: { facingMode: 'environment' } })
        .then(stream => {
            video.srcObject = stream;
        })
        .catch(error => {
            console.error("Gagal mengakses kamera:", error);
            alert("Gagal mengakses kamera. Pastikan Anda memberi izin.");
        });

    function captureImage() {
        const context = canvas.getContext('2d');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        context.drawImage(video, 0, 0, canvas.width, canvas.height);

        const imageData = canvas.toDataURL('image/png');
        capturedImage.src = imageData;
        sendImageForDetection(imageData);
        resultContainer.classList.remove('hidden');
    }

    async function sendImageForDetection(imageData) {
        try {
            const response = await fetch('/api/detect-food', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ image: imageData })
            });

            if (response.ok) {
                const data = await response.json();
                displayDetectionResult(data);
                displayRecommendations(data.recommendations);
            } else {
                alert("Gagal mendeteksi makanan.");
            }
        } catch (error) {
            console.error("Error:", error);
            alert("Terjadi kesalahan saat mengirim gambar.");
        }
    }

    function displayDetectionResult(data) {
        foodName.textContent = data.food_name || 'Tidak terdeteksi';
        calories.textContent = data.nutrition?.calories || '-';
        protein.textContent = data.nutrition?.protein || '-';
        fat.textContent = data.nutrition?.fat || '-';
        carbs.textContent = data.nutrition?.carbs || '-';
        fiber.textContent = data.nutrition?.fiber || '-';
        servingSize.textContent = data.serving_size || '-';
        accuracy.textContent = data.accuracy ? (data.accuracy * 100).toFixed(2) + "%" : '-';

    }

    function displayRecommendations(recommendations) {
        if (recommendations && recommendations.length > 0) {
            recommendationsList.innerHTML = '';
            recommendations.forEach(rec => {
                const li = document.createElement('li');
                li.textContent = rec.name;
                recommendationsList.appendChild(li);
            });
            recommendationContainer.classList.remove('hidden');
        } else {
            recommendationContainer.classList.add('hidden');
        }
    }
</script>
    @endpush
</x-app-layout>