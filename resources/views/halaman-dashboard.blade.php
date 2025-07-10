<x-app-layout>
    <div class="min-h-screen bg-[#1E1F9D] text-white flex flex-col lg:flex-row">
        <!-- Sidebar (Desktop) -->
        <aside class="hidden lg:block fixed top-0 left-0 h-full w-64 bg-[#15168a] p-6 shadow-lg z-10">
            <div class="flex items-center mb-10">
                <img src="{{ asset('images/Logo.png') }}" alt="FitRadar AI Logo" class="h-20 w-auto mr-2">
                <span class="text-xl font-bold leading-tight">FITRADAR<br>AI</span>
            </div>
            <nav class="space-y-4">
                <a href="{{ route('halaman-dashboard') }}" class="flex items-center gap-3 text-white bg-[#1E1F9D] px-3 py-2 rounded-lg">Tinjauan</a>
                <a href="{{ route('halaman-profil') }}" class="flex items-center gap-3 text-gray-300 hover:text-white transition-all">Profil</a>
                <a href="{{ route('deteksi') }}" class="flex items-center gap-3 text-gray-300 hover:text-white transition-all">Deteksi</a>
                <a href="{{ route('halaman-makanan') }}" class="flex items-center gap-3 text-gray-300 hover:text-white transition-all">Makanan</a>
                <a href="{{ route('halaman-olahraga') }}" class="flex items-center gap-3 text-gray-300 hover:text-white transition-all">Olahraga</a>
            </nav>
        </aside>

        <!-- Mobile Header -->
        <div class="lg:hidden bg-[#15168a] p-4 flex items-center justify-between">
            <button id="mobileMenuBtn" class="text-white p-2 hover:bg-[#1E1F9D] rounded-lg transition-colors">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="flex items-center">
                <img src="{{ asset('images/Logo.png') }}" alt="FitRadar AI Logo" class="h-10 w-auto mr-2">
                <span class="text-lg font-semibold">FITRADAR AI</span>
            </div>
            <div class="w-10"></div>
        </div>

        <!-- Mobile Sidebar -->
        <div id="mobileMenu" class="lg:hidden hidden bg-[#15168a] px-4 py-2 space-y-2">
            <a href="{{ route('halaman-dashboard') }}" class="block bg-[#1E1F9D] text-white px-3 py-1 rounded">Tinjauan</a>
            <a href="{{ route('halaman-profil') }}" class="block text-white hover:text-gray-300">Profil</a>
            <a href="{{ route('deteksi') }}" class="block text-white hover:text-gray-300">Deteksi</a>
            <a href="{{ route('halaman-makanan') }}" class="block text-white hover:text-gray-300">Makanan</a>
            <a href="{{ route('halaman-olahraga') }}" class="block text-white hover:text-gray-300">Olahraga</a>
        </div>

        <!-- Main Content -->
        <main class="flex-1 lg:pl-64 p-6">
            <h1 class="text-2xl font-bold text-center text-white mb-10">Laporan Kemajuan</h1>

            <!-- Charts Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Chart Berat Badan -->
                <div class="bg-white text-[#1E1F9D] rounded-lg shadow-md p-6 h-[400px]">
                    <h2 class="font-semibold mb-4">Riwayat Berat Badan</h2>
                    <canvas id="weightChart" class="h-full"></canvas>
                </div>

                <!-- BMI Calculator -->
                <div class="bg-white text-[#1E1F9D] rounded-lg shadow-md p-6 h-[400px]">
                    <h2 class="font-semibold mb-4">Pengukur BMI</h2>
                    <label class="block">Tinggi (cm):
                        <input type="number" id="tinggi" class="w-full text-black p-2 rounded border mt-1">
                    </label>
                    <label class="block mt-4">Berat (kg):
                        <input type="number" id="berat" class="w-full text-black p-2 rounded border mt-1">
                    </label>
                    <button onclick="hitungBMI()" class="bg-blue-600 text-white px-4 py-2 mt-4 rounded">Hitung BMI</button>
                    <div id="bmiResult" class="mt-4 font-bold"></div>
                    <div id="bmiCategory" class="text-sm italic text-gray-700"></div>
                </div>

                <!-- Progress Chart -->
                <div class="bg-white text-[#1E1F9D] rounded-lg shadow-md p-6 h-[400px] flex flex-col justify-between">
                    <h2 class="font-semibold">Laporan</h2>
                    <div class="flex-1 flex items-center justify-center">
                        <canvas id="progressChart" class="max-h-[260px]"></canvas>
                    </div>
                </div>

                <!-- Activity Chart -->
                <div class="bg-white text-[#1E1F9D] rounded-lg shadow-md p-6 h-[400px]">
                    <h2 class="font-semibold mb-4">Riwayat Olahraga dan Makanan</h2>
                    <canvas id="activityChart" class="h-full"></canvas>
                </div>
            </div>
        </main>
    </div>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Toggle mobile sidebar
        document.getElementById('mobileMenuBtn').addEventListener('click', function () {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        });

        document.addEventListener('click', function (event) {
            const menu = document.getElementById('mobileMenu');
            const btn = document.getElementById('mobileMenuBtn');
            if (!menu.contains(event.target) && !btn.contains(event.target)) {
                menu.classList.add('hidden');
            }
        });

        function hitungBMI() {
            const tinggi = parseFloat(document.getElementById('tinggi').value);
            const berat = parseFloat(document.getElementById('berat').value);
            const result = document.getElementById('bmiResult');
            const category = document.getElementById('bmiCategory');

            if (isNaN(tinggi) || isNaN(berat) || tinggi <= 0 || berat <= 0) {
                result.textContent = 'Masukkan tinggi dan berat yang valid.';
                category.textContent = '';
                return;
            }

            const bmi = berat / ((tinggi / 100) ** 2);
            result.textContent = `BMI Anda: ${bmi.toFixed(2)}`;

            if (bmi < 18.5) category.textContent = 'Kategori: Kekurangan Berat Badan';
            else if (bmi < 25) category.textContent = 'Kategori: Normal';
            else if (bmi < 30) category.textContent = 'Kategori: Kelebihan Berat Badan';
            else category.textContent = 'Kategori: Obesitas';
        }

        // Chart
        new Chart(document.getElementById('weightChart'), {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                datasets: [{
                    label: 'Berat Badan (kg)',
                    data: [65, 64, 63.5, 63, 62.8, 62.5],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    fill: false
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { position: 'bottom' } }
            }
        });

        new Chart(document.getElementById('progressChart'), {
            type: 'doughnut',
            data: {
                labels: ['Selesai', 'Belum Selesai'],
                datasets: [{
                    data: [90, 10],
                    backgroundColor: ['rgba(54, 162, 235, 0.8)', 'rgba(201, 203, 207, 0.8)']
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { position: 'bottom' } }
            }
        });

        new Chart(document.getElementById('activityChart'), {
            type: 'bar',
            data: {
                labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                datasets: [
                    {
                        label: 'Olahraga (jam)',
                        data: [1, 0.5, 1.5, 1, 0, 2, 0.75],
                        backgroundColor: 'rgba(255, 99, 132, 0.7)'
                    },
                    {
                        label: 'Makanan (kalori)',
                        data: [2000, 2200, 1900, 2100, 2500, 1800, 2300],
                        backgroundColor: 'rgba(75, 192, 192, 0.7)'
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: { legend: { position: 'bottom' } }
            }
        });
    </script>
</x-app-layout>
