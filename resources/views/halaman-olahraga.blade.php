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
                <a href="halaman-olahraga" class="flex items-center text-gray-300 hover:text-white">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 7v-1c0-1.1.9-2 2-2h12a2 2 0 012 2v1m-1 5h-.586a1 1 0 00-.707.293l-5 5a1 1 0 00-1.414 0l-5-5A1 1 0 004.586 12H4m16 0h-.586a1 1 0 01-.707-.293l-5-5a1 1 0 01-1.414 0l-5 5A1 1 0 014.586 12H4" />
                    </svg>
                    <span>olahraga</span>
                </a>
            </nav>
        </aside>

        {{-- Main Content --}}
        <main class="flex-1 pl-64 p-8">
            <h1 class="text-3xl font-semibold mb-6 text-center">REKOMENDASI OLAHRAGA</h1>

            {{-- Carousel Video --}}
            <div class="mb-8 flex justify-center">
               <video class="rounded-lg shadow-lg" style="width: 200px;" autoplay muted loop controls>
    <source src="{{ asset('images/rekomendasi.mp4') }}" type="video/mp4">
    Browser Anda tidak mendukung pemutaran video.
</video>
            </div>

            <div>
                <div class="mb-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="flex flex-col items-center">
                        <h4 class="font-semibold mb-2">Angkat Beban Ringan</h4>
                        <img src="{{ asset('images/barbel.jpeg') }}" alt="Latihan Angkat Beban Ringan" class="rounded-md w-32 h-32 object-cover mb-2">
                        <p class="text-sm text-center">Menggunakan beban ringan (botol air, buku, dumbbell kecil) untuk melatih otot. Fokus pada 8-10 repetisi dengan gerakan terkontrol.</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <h4 class="font-semibold mb-2">Squat Kursi</h4>
                        <img src="{{ asset('images/squat.jpeg') }}" alt="Latihan Squat dengan Bantuan Kursi" class="rounded-md w-32 h-32 object-cover mb-2">
                        <p class="text-sm text-center">Squat Kursi: Berdiri di depan kursi, turunkan pinggul hingga menyentuh kursi lalu berdiri kembali. Melatih paha dan bokong dengan aman.</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <h4 class="font-semibold mb-2">Yoga Lembut</h4>
                        <img src="{{ asset('images/yoga.jpeg') }}" alt="Gerakan Yoga Lembut" class="rounded-md w-32 h-32 object-cover mb-2">
                        <p class="text-sm text-center">Yoga Lembut: Ikuti tutorial untuk pemula, fokus pada peregangan lembut, keseimbangan, dan pernapasan.</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <h4 class="font-semibold mb-2">Jalan Ditempat</h4>
                        <img src="{{ asset('images/jalan.jpeg') }}" alt="Jalan Kaki di Tempat (Marching in Place)" class="rounded-md w-32 h-32 object-cover mb-2">
                        <p class="text-sm text-center">Jalan di Tempat: Angkat lutut bergantian sambil mengayunkan lengan. Lakukan selama 5-10 menit, tingkatkan bertahap.</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>