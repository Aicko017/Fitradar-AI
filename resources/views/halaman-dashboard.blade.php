<x-app-layout>
    <div class="min-h-screen bg-[#1E1F9D] text-white flex">
        <div class="fixed top-0 left-0 h-full w-64 bg-[#15168a] p-6">
            <div class="flex items-center mb-8">
                <img src="{{ asset('images/Logo.png') }}" alt="FitRadar AI Logo" class="h-20 w-auto mr-2">
                <span class="text-xl font-semibold">FITRADAR<br>AI</span>
            </div>
            <nav class="space-y-4">
                <a href="halaman-dashboard" class="flex items-center text-gray-300 hover:text-white">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0l-2-2m2 2l7 7"></path></svg>
                    <span>Tinjauan</span>
                </a>
                <a href="halaman-profil" class="flex items-center text-gray-300 hover:text-white">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    <span>Profil</span>
                </a>
                <a href="deteksi" class="flex items-center text-gray-300 hover:text-white">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 11-2 0 1 1 0 012 0zm0 7a1 1 0 11-2 0 1 1 0 012 0zm0 7a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                    <span>Deteksi</span>
                
                </a>
                <a href="halaman-makanan" class="flex items-center text-gray-300 hover:text-white">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v-1c0-1.1.9-2 2-2h12a2 2 0 012 2v1m-1 5h-.586a1 1 0 00-.707.293l-5 5a1 1 0 00-1.414 0l-5-5A1 1 0 004.586 12H4m16 0h-.586a1 1 0 01-.707-.293l-5-5a1 1 0 01-1.414 0l-5 5A1 1 0 014.586 12H4"></path></svg>
                    <span>Makanan</span>
                </a>
            </nav>
        </div>

        <div class="flex-1 ml-64 p-8">
            <h1 class="text-2xl font-semibold mb-6 text-center">Laporan Kemajuan</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white text-[#1E1F9D] rounded-lg shadow-md p-6">
                    <h2 class="font-semibold mb-4">Riwayat Berat Badan</h2>
                    <img src="{{ asset('images/grafik_berat_badan.png') }}" alt="Grafik Riwayat Berat Badan" class="w-full h-auto">
                    <p class="text-sm text-gray-600 mt-2">Grafik menunjukkan perubahan berat badan Anda dari waktu ke waktu.</p>
                </div>

                <div class="bg-white text-[#1E1F9D] rounded-lg shadow-md p-6">
                    <h2 class="font-semibold mb-4">BMI Anda Saat Ini</h2>
                    <div class="flex justify-center items-center">
                        <div class="relative w-32 h-32">
                            <img src="{{ asset('images/bmi_gauge.png') }}" alt="Pengukur BMI" class="absolute top-0 left-0 w-full h-full">
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
                                <span class="font-bold text-xl">BMI</span>
                                <span class="text-sm text-gray-600">Anda</span>
                            </div>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600 mt-2 text-center">BMI (Body Mass Index) Anda saat ini.</p>
                </div>

                <div class="bg-white text-[#1E1F9D] rounded-lg shadow-md p-6">
                    <h2 class="font-semibold mb-4">Laporan</h2>
                    <div class="flex justify-center items-center">
                        <div class="relative w-32 h-32">
                            <img src="{{ asset('images/pie_chart.png') }}" alt="Pie Chart Laporan" class="absolute top-0 left-0 w-full h-full">
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
                                <span class="font-bold text-xl">90%</span>
                                <span class="text-sm text-gray-600">Selesai</span>
                            </div>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600 mt-2 text-center">Progres Anda dalam mencapai target.</p>
                </div>

                <div class="bg-white text-[#1E1F9D] rounded-lg shadow-md p-6">
                    <h2 class="font-semibold mb-4">Riwayat Olahraga dan Makanan</h2>
                    <img src="{{ asset('images/bar_chart.png') }}" alt="Grafik Riwayat Olahraga dan Makanan" class="w-full h-auto">
                    <p class="text-sm text-gray-600 mt-2">Grafik menunjukkan riwayat aktivitas olahraga dan asupan makanan Anda.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>