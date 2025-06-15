<x-app-layout>
    <div class="min-h-screen bg-[#F4F4F4] text-gray-800 flex">

        {{-- Sidebar --}}
        <aside class="fixed top-0 left-0 h-full w-64 bg-[#15168a] text-white p-6">
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
                <a href="{{ route('deteksi') }}" class="flex items-center text-white bg-[#1E1F9D] px-3 py-2 rounded-lg">
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
                <a href="halaman-olahraga" class="flex items-center text-gray-300 hover:text-white">
                   
                <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v-1c0-1.1.9-2 2-2h12a2 2 0 012 2v1m-1 5h-.586a1 1 0 00-.707.293l-5 5a1 1 0 00-1.414 0l-5-5A1 1 0 004.586 12H4m16 0h-.586a1 1 0 01-.707-.293l-5-5a1 1 0 01-1.414 0l-5 5A1 1 0 014.586 12H4"></path></svg>
                    <span>olahraga</span>
                </a>
            </nav>
        </aside>
        {{-- Main Content --}}
        <main class="flex-1 pl-80 p-8">
            <h1 class="text-2xl font-semibold mb-6 text-center">Deteksi Makanan</h1>

            {{-- Tombol Ambil Gambar --}}
            <div class="mb-8 text-center">
    <video id="cameraPreview" autoplay playsinline class="mx-auto rounded-md w-64 h-auto border-2 border-white"></video>
    <br>
    <button onclick="captureImage()" class="mt-4 bg-[#1E1F9D] hover:bg-[#15168a] text-white font-semibold py-2 px-4 rounded-full shadow-lg">
        Ambil Foto
    </button>
    <canvas id="cameraCanvas" class="hidden"></canvas>
</div>


            {{-- Hasil Deteksi --}}
           <div id="resultContainer" class="hidden max-w-md mx-auto bg-white rounded-2xl shadow-md p-6 mt-6">
    <h2 class="text-xl font-bold text-center text-[#1E1F9D] mb-4">
        Hasil Deteksi: <span id="foodName" class="font-semibold text-black"></span>
    </h2>
    <div class="flex justify-center mb-4">
        <img id="capturedImage" src="#" alt="Captured Image" class="rounded-xl w-full max-w-xs shadow-lg border border-gray-200">
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

                {{-- Rekomendasi --}}
            <div id="recommendationContainer" class="mt-8 hidden">
                <h2 class="text-xl font-semibold mb-4">Rekomendasi Makanan Alternatif:</h2>
                <ul id="recommendationsList" class="list-disc ml-6"></ul>
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