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
                <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 7v-1c0-1.1.9-2 2-2h12a2 2 0 012 2v1m-1 5h-.586a1 1 0 00-.707.293l-5 5a1 1 0 00-1.414 0l-5-5" />
                    </svg>                    <span>Makanan</span>
                </a>
                <a href="halaman-olahraga" class="flex items-center text-gray-300 hover:text-white">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v-1c0-1.1.9-2 2-2h12a2 2 0 012 2v1m-1 5h-.586a1 1 0 00-.707.293l-5 5a1 1 0 00-1.414 0l-5-5A1 1 0 004.586 12H4m16 0h-.586a1 1 0 01-.707-.293l-5-5a1 1 0 01-1.414 0l-5 5A1 1 0 014.586 12H4"></path></svg>
                    <span>olahraga</span>
                </a>
            </nav>
        </div>

        <div class="flex-1 ml-64 p-8">
            <h1 class="text-2xl font-semibold mb-6 text-center">Laporan Kemajuan</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white text-[#1E1F9D] rounded-lg shadow-md p-6">
                    <h2 class="font-semibold mb-4">Riwayat Berat Badan</h2>
                    <div class="container mx-auto">
                        <canvas id="weightChart" width="400" height="200"></canvas>
                    </div>
                    <p class="text-sm text-gray-600 mt-2">Grafik menunjukkan perubahan berat badan Anda dari waktu ke waktu.</p>
                </div>

                <div class="bg-white text-[#1E1F9D] rounded-lg shadow-md p-6">
                    <h2 class="font-semibold mb-4">Pengukur BMI</h2>
                    <div class="mb-4">
                        <label for="tinggi" class="block text-gray-700 text-sm font-bold mb-2">Tinggi (cm):</label>
                        <input type="number" id="tinggi" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan tinggi dalam cm">
                    </div>
                    <div class="mb-4">
                        <label for="berat" class="block text-gray-700 text-sm font-bold mb-2">Berat Badan (kg):</label>
                        <input type="number" id="berat" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan berat badan dalam kg">
                    </div>
                    <button onclick="hitungBMI()" class="bg-[#007bff] hover:bg-[#0056b3] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Hitung BMI</button>
                    <div id="bmiResult" class="mt-4 font-semibold"></div>
                    <div id="bmiCategory" class="mt-2 text-sm italic text-gray-600"></div>
                </div>

                <div class="bg-white text-[#1E1F9D] rounded-lg shadow-md p-6">
                    <h2 class="font-semibold mb-4">Laporan</h2>
                    <div class="container mx-auto">
                        <canvas id="progressChart" width="200" height="200"></canvas>
                    </div>
                    <p class="text-sm text-gray-600 mt-2 text-center">Progres Anda dalam mencapai target.</p>
                </div>

                <div class="bg-white text-[#1E1F9D] rounded-lg shadow-md p-6">
                    <h2 class="font-semibold mb-4">Riwayat Olahraga dan Makanan</h2>
                    <div class="container mx-auto">
                        <canvas id="activityChart" width="400" height="200"></canvas>
                    </div>
                    <p class="text-sm text-gray-600 mt-2">Grafik menunjukkan riwayat aktivitas olahraga dan asupan makanan Anda.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const weightCtx = document.getElementById('weightChart').getContext('2d');
        const weightChart = new Chart(weightCtx, {
            type: 'line', // Jenis grafik garis untuk riwayat berat badan
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'], // Ganti dengan label tanggal/waktu sesuai data Anda
                datasets: [{
                    label: 'Berat Badan (kg)',
                    data: [65, 64, 63.5, 63, 62.8, 62.5], // Ganti dengan data berat badan Anda
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    fill: false
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: false, // Jangan mulai dari 0 karena berat badan mungkin tidak mendekati 0
                        title: {
                            display: true,
                            text: 'Berat Badan (kg)'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Waktu'
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom',
                        labels: {
                            color: '#1E1F9D' // Warna teks legend
                        }
                    }
                }
            }
        });

        function hitungBMI() {
            const tinggiInput = document.getElementById('tinggi');
            const beratInput = document.getElementById('berat');
            const resultDiv = document.getElementById('bmiResult');
            const categoryDiv = document.getElementById('bmiCategory');

            const tinggiCm = parseFloat(tinggiInput.value);
            const beratKg = parseFloat(beratInput.value);

            if (isNaN(tinggiCm) || isNaN(beratKg) || tinggiCm <= 0 || beratKg <= 0) {
                resultDiv.textContent = 'Masukkan tinggi dan berat badan yang valid.';
                categoryDiv.textContent = '';
                return;
            }

            // Konversi tinggi dari cm ke meter
            const tinggiMeter = tinggiCm / 100;

            // Hitung BMI
            const bmi = beratKg / (tinggiMeter * tinggiMeter);
            const roundedBmi = bmi.toFixed(2);

            let category = '';
            if (bmi < 18.5) {
                category = 'Kekurangan Berat Badan';
            } else if (bmi < 25) {
                category = 'Berat Badan Normal';
            } else if (bmi < 30) {
                category = 'Kelebihan Berat Badan';
            } else {
                category = 'Obesitas';
            }

            resultDiv.textContent = `BMI Anda: ${roundedBmi}`;
            categoryDiv.textContent = `Kategori: ${category}`;
        }

        // Pie Chart untuk Laporan
        const progressCtx = document.getElementById('progressChart').getContext('2d');
        const progressChart = new Chart(progressCtx, {
            type: 'doughnut', // Bisa juga 'pie'
            data: {
                labels: ['Selesai', 'Belum Selesai'], // Label untuk bagian pie chart
                datasets: [{
                    data: [90, 10], // Data persentase (sesuaikan dengan data progres Anda)
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.8)', // Warna untuk bagian "Selesai"
                        'rgba(201, 203, 207, 0.8)'  // Warna untuk bagian "Belum Selesai"
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(201, 203, 207, 1)'
                    ],
                    borderWidth: 1,
                    hoverOffset: 4
                }]
            },
            options: {
                cutout: '70%', // Membuatnya menjadi doughnut chart (opsional)
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom',
                        labels: {
                            color: '#1E1F9D'
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return `${context.label}: ${context.formattedValue}%`;
                            }
                        }
                    },
                    title: {
                        display: false, // Anda sudah punya judul di atas card
                        text: 'Progres'
                    },
                    // Untuk menampilkan angka persentase di tengah (opsional)
                    afterDraw: chart => {
                        const { ctx, data } = chart;
                        const total = data.datasets[0].data.reduce((a, b) => a + b, 0);
                        const text = `${data.datasets[0].data[0]}%`; // Ambil nilai "Selesai"
                        ctx.font = 'bold 16px sans-serif';
                        ctx.fillStyle = '#1E1F9D';
                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'middle';
                        ctx.fillText(text, chart.chartArea.width / 2, chart.chartArea.height / 2);
                    }
                }
            }
        });

        // Bar Chart untuk Riwayat Olahraga dan Makanan
        const activityCtx = document.getElementById('activityChart').getContext('2d');
        const activityChart = new Chart(activityCtx, {
            type: 'bar',
            data: {
                labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'], // Label hari
                datasets: [{
                    label: 'Olahraga (jam)',
                    data: [1, 0.5, 1.5, 1, 0, 2, 0.75], // Contoh data durasi olahraga per hari (dalam jam)
                    backgroundColor: 'rgba(255, 99, 132, 0.7)', // Warna bar olahraga
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }, {
                    label: 'Makanan (jumlah kalori)',
                    data: [2000, 2200, 1900, 2100, 2500, 1800, 2300], // Contoh data asupan kalori per hari
                    backgroundColor: 'rgba(75, 192, 192, 0.7)', // Warna bar makanan
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Durasi (jam) / Kalori'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Hari'
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom',
                        labels: {
                            color: '#1E1F9D'
                        }
                    },
                    title: {
                        display: false, // Anda sudah punya judul di atas card
                        text: 'Riwayat Olahraga dan Makanan'
                    }
                }
            }
        });
    </script>
</x-app-layout>