<x-app-layout>
    <div class="min-h-screen bg-gray-100 text-gray-800 flex">

        {{-- Sidebar --}}
        <aside class="fixed top-0 left-0 h-full w-64 bg-[#15168a] text-white p-6 shadow-lg z-10">
            <div class="flex items-center mb-10">
                <img src="{{ asset('images/Logo.png') }}" alt="FitRadar AI Logo" class="h-20 w-auto mr-2">
                <span class="text-xl font-bold leading-tight">FITRADAR<br>AI</span>
            </div>

            <nav class="space-y-4">
                <a href="{{ route('halaman-dashboard') }}" class="flex items-center gap-3 text-gray-300 hover:text-white transition-all">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3" /></svg>
                    Tinjauan
                </a>
                <a href="{{ route('halaman-profil') }}" class="flex items-center gap-3 text-gray-300 hover:text-white transition-all">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                    Profil
                </a>
                <a href="{{ route('deteksi') }}" class="flex items-center gap-3 text-gray-300 hover:text-white transition-all">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01" /></svg>
                    Deteksi
                </a>
                <a href="{{ route('halaman-makanan') }}" class="flex items-center gap-3 text-gray-300 hover:text-white transition-all">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v-1c0-1.1.9-2 2-2h12a2 2 0 012 2v1m-1 5h-.586a1 1 0 00-.707.293l-5 5a1 1 0 00-1.414 0l-5-5" /></svg>
                    Makanan
                </a>
               <a href="{{ route('halaman-olahraga') }}" class="flex items-center gap-3 text-white bg-[#1E1F9D] px-3 py-2 rounded-lg">
                <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v-1c0-1.1.9-2 2-2h12a2 2 0 012 2v1m-1 5h-.586a1 1 0 00-.707.293l-5 5a1 1 0 00-1.414 0l-5-5A1 1 0 004.586 12H4m16 0h-.586a1 1 0 01-.707-.293l-5-5a1 1 0 01-1.414 0l-5 5A1 1 0 014.586 12H4"></path></svg>
                <span>olahraga</span>
</a>

            </nav>
        </aside>

        {{-- Main Content --}}
        <main class="flex-1 pl-64 p-10">
            <h1 class="text-4xl font-bold text-center text-[#15168a] mb-10">Rekomendasi Olahraga</h1>

           {{-- Video dan Referensi YouTube --}}
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-10">
    {{-- Video Utama --}}
    <div class="flex justify-center">
        <video class="rounded-xl shadow-xl w-full max-w-md" autoplay muted loop controls>
            <source src="{{ asset('images/rekomendasi.mp4') }}" type="video/mp4">
            Browser Anda tidak mendukung pemutaran video.
        </video>
    </div>

    {{-- Referensi YouTube --}}
    <div class="space-y-6">
        <h3 class="text-xl font-semibold text-[#15168a] mb-2">Referensi Video Latihan</h3>

        <iframe class="w-full aspect-video rounded-lg shadow-md" src="https://www.youtube.com/embed/v7AYKMP6rOE" title="Yoga Pemula" allowfullscreen></iframe>
        <iframe class="w-full aspect-video rounded-lg shadow-md" src="https://www.youtube.com/embed/aclHkVaku9U" title="Squat Pemula" allowfullscreen></iframe>
       <iframe class="w-full aspect-video rounded-lg shadow-md"
    src="https://www.youtube.com/embed/98cXrLyryBw"
    title="Workout Santai Jalan di Tempat - SKWAD Fitness"
    allowfullscreen>
</iframe>


    </div>
</div>


            {{-- Rekomendasi --}}
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
                    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition p-4 text-center">
                        <img src="{{ asset('images/' . $item['img']) }}" alt="{{ $item['judul'] }}" class="w-32 h-32 mx-auto rounded-lg object-cover mb-4">
                        <h4 class="text-lg font-semibold mb-2">{{ $item['judul'] }}</h4>
                        <p class="text-sm text-gray-600">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </main>
    </div>
</x-app-layout>
