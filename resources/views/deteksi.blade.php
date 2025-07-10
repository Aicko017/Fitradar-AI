<x-app-layout>
    <!-- Mobile Header -->
    <div class="lg:hidden fixed top-0 left-0 w-full bg-[#15168a] p-4 flex items-center justify-between z-50 shadow-md">
        <button id="mobileMenuBtn" class="text-white p-2 hover:bg-[#1E1F9D] rounded-lg">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <div class="flex items-center">
            <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="h-10 w-auto mr-2">
            <span class="text-lg font-bold">FITRADAR AI</span>
        </div>
        <div class="w-10"></div>
    </div>

    <!-- Mobile Sidebar -->
    <div id="mobileMenu" class="lg:hidden hidden bg-[#15168a] px-4 py-2 space-y-2 mt-[64px] z-40 fixed w-full">
        <a href="{{ route('halaman-dashboard') }}" class="block text-white hover:text-gray-300">Tinjauan</a>
        <a href="{{ route('halaman-profil') }}" class="block text-white hover:text-gray-300">Profil</a>
        <a href="{{ route('deteksi') }}" class="block bg-[#1E1F9D] text-white px-3 py-1 rounded">Deteksi</a>
        <a href="{{ route('halaman-makanan') }}" class="block text-white hover:text-gray-300">Makanan</a>
        <a href="{{ route('halaman-olahraga') }}" class="block text-white hover:text-gray-300">Olahraga</a>
    </div>

    <!-- Main Layout -->
    <div class="min-h-screen bg-[#F4F4F4] text-gray-800 flex flex-col lg:flex-row pt-16">
        <!-- Sidebar Desktop -->
        <aside class="hidden lg:block fixed top-0 left-0 h-full w-64 bg-[#15168a] text-white p-6 z-40">
            <div class="flex items-center mb-8">
                <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="h-20 w-auto mr-2">
                <span class="text-xl font-semibold leading-tight">FITRADAR<br>AI</span>
            </div>
            <nav class="space-y-4">
                <a href="{{ route('halaman-dashboard') }}" class="block text-gray-300 hover:text-white">Tinjauan</a>
                <a href="{{ route('halaman-profil') }}" class="block text-gray-300 hover:text-white">Profil</a>
                <a href="{{ route('deteksi') }}" class="block bg-[#1E1F9D] px-3 py-2 rounded text-white">Deteksi</a>
                <a href="{{ route('halaman-makanan') }}" class="block text-gray-300 hover:text-white">Makanan</a>
                <a href="{{ route('halaman-olahraga') }}" class="block text-gray-300 hover:text-white">Olahraga</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 lg:ml-64 p-6 pt-4">
            <h1 class="text-2xl font-semibold mb-6 text-center">Deteksi Makanan</h1>

            <!-- Camera -->
            <div class="mb-8 text-center">
                <video id="cameraPreview" autoplay playsinline class="mx-auto rounded-md w-64 h-auto border-2 border-white"></video>
                <br>
                <button onclick="captureImage()" class="mt-4 bg-[#1E1F9D] hover:bg-[#15168a] text-white font-semibold py-2 px-4 rounded-full shadow-lg">Ambil Foto</button>
                <canvas id="cameraCanvas" class="hidden"></canvas>
            </div>

            <!-- Hasil Deteksi -->
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

            <!-- Rekomendasi -->
            <div id="recommendationContainer" class="mt-8 hidden">
                <h2 class="text-xl font-semibold mb-4">Rekomendasi Makanan Alternatif:</h2>
                <ul id="recommendationsList" class="list-disc ml-6"></ul>
            </div>
        </main>
    </div>

    <!-- Script -->
    <script>
        // Mobile menu toggle
        const mobileBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        mobileBtn.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
        document.addEventListener('click', (e) => {
            if (!mobileMenu.contains(e.target) && !mobileBtn.contains(e.target)) {
                mobileMenu.classList.add('hidden');
            }
        });

        // Camera + Deteksi
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

        navigator.mediaDevices.getUserMedia({ video: { facingMode: 'environment' } })
            .then(stream => video.srcObject = stream)
            .catch(error => alert("Gagal mengakses kamera."));

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
                const data = await response.json();
                displayDetectionResult(data);
                displayRecommendations(data.recommendations);
            } catch (error) {
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
            if (recommendations?.length) {
                recommendationsList.innerHTML = '';
                recommendations.forEach(r => {
                    const li = document.createElement('li');
                    li.textContent = r.name;
                    recommendationsList.appendChild(li);
                });
                recommendationContainer.classList.remove('hidden');
            } else {
                recommendationContainer.classList.add('hidden');
            }
        }
    </script>
</x-app-layout>
