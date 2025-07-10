<x-app-layout>
    <div class="min-h-screen bg-[#1E1F9D] text-white flex flex-col lg:flex-row">
        <!-- Sidebar (Desktop) -->
        <aside class="hidden lg:block fixed top-0 left-0 h-full w-64 bg-[#15168a] p-6 shadow-lg z-10">
            <div class="flex items-center mb-10">
                <img src="{{ asset('images/Logo.png') }}" alt="FitRadar AI Logo" class="h-20 w-auto mr-2">
                <span class="text-xl font-bold leading-tight">FITRADAR<br>AI</span>
            </div>
            <nav class="space-y-4">
                <a href="{{ route('halaman-dashboard') }}" class="flex items-center gap-3 text-gray-300 hover:text-white transition-all">Tinjauan</a>
                <a href="{{ route('halaman-profil') }}" class="flex items-center gap-3 text-gray-300 hover:text-white transition-all">Profil</a>
                <a href="{{ route('deteksi') }}" class="flex items-center gap-3 text-gray-300 hover:text-white transition-all">Deteksi</a>
                <a href="{{ route('halaman-makanan') }}" class="flex items-center gap-3 text-gray-300 hover:text-white transition-all">Makanan</a>
                <a href="{{ route('halaman-olahraga') }}" class="flex items-center gap-3 text-white bg-[#1E1F9D] px-3 py-2 rounded-lg">Olahraga</a>
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
            <a href="{{ route('halaman-dashboard') }}" class="block text-white hover:text-gray-300">Tinjauan</a>
            <a href="{{ route('halaman-profil') }}" class="block text-white hover:text-gray-300">Profil</a>
            <a href="{{ route('deteksi') }}" class="block text-white hover:text-gray-300">Deteksi</a>
            <a href="{{ route('halaman-makanan') }}" class="block text-white hover:text-gray-300">Makanan</a>
            <a href="{{ route('halaman-olahraga') }}" class="block bg-[#1E1F9D] text-white px-3 py-1 rounded">Olahraga</a>
        </div>

        <!-- Main Content -->
        <main class="flex-1 lg:pl-64 p-6">
            <h1 class="text-4xl font-bold text-center text-white mb-10">Rekomendasi Olahraga</h1>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-10">
                <div class="flex justify-center">
                    <video class="rounded-xl shadow-xl w-full max-w-md" autoplay muted loop controls>
                        <source src="{{ asset('images/rekomendasi.mp4') }}" type="video/mp4">
                        Browser Anda tidak mendukung pemutaran video.
                    </video>
                </div>

                <div class="space-y-6">
                    <h3 class="text-xl font-semibold text-white mb-2">Referensi Video Latihan</h3>
                    <iframe class="w-full aspect-video rounded-lg shadow-md" src="https://www.youtube.com/embed/v7AYKMP6rOE" title="Yoga Pemula" allowfullscreen></iframe>
                    <iframe class="w-full aspect-video rounded-lg shadow-md" src="https://www.youtube.com/embed/aclHkVaku9U" title="Squat Pemula" allowfullscreen></iframe>
                    <iframe class="w-full aspect-video rounded-lg shadow-md" src="https://www.youtube.com/embed/98cXrLyryBw" title="Workout Santai Jalan di Tempat - SKWAD Fitness" allowfullscreen></iframe>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $rekomendasi = [
                        ['img' => 'barbel.jpeg', 'judul' => 'Angkat Beban Ringan', 'desc' => 'Menggunakan beban ringan (botol air, buku, dumbbell kecil) untuk melatih otot. Fokus pada 8-10 repetisi dengan gerakan terkontrol.'],
                        ['img' => 'squat.jpeg', 'judul' => 'Squat Kursi', 'desc' => 'Squat Kursi: Berdiri di depan kursi, turunkan pinggul hingga menyentuh kursi lalu berdiri kembali. Melatih paha dan bokong dengan aman.'],
                        ['img' => 'yoga.jpeg', 'judul' => 'Yoga Lembut', 'desc' => 'Yoga Lembut: Ikuti tutorial untuk pemula, fokus pada peregangan lembut, keseimbangan, dan pernapasan.'],
                        ['img' => 'jalan.jpeg', 'judul' => 'Jalan Ditempat', 'desc' => 'Jalan di Tempat: Angkat lutut bergantian sambil mengayunkan lengan. Lakukan selama 5-10 menit, tingkatkan bertahap.'],
                    ];
                @endphp

                @foreach ($rekomendasi as $item)
                    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition p-4 text-center text-gray-800">
                        <img src="{{ asset('images/' . $item['img']) }}" alt="{{ $item['judul'] }}" class="w-32 h-32 mx-auto rounded-lg object-cover mb-4">
                        <h4 class="text-lg font-semibold mb-2">{{ $item['judul'] }}</h4>
                        <p class="text-sm text-gray-600">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </main>
    </div>

    <script>
        // Toggle mobile sidebar
        document.getElementById('mobileMenuBtn').addEventListener('click', function () {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        });

        // Optional: hide menu when clicked outside
        document.addEventListener('click', function (event) {
            const menu = document.getElementById('mobileMenu');
            const btn = document.getElementById('mobileMenuBtn');
            if (!menu.contains(event.target) && !btn.contains(event.target)) {
                menu.classList.add('hidden');
            }
        });
    </script>
</x-app-layout>