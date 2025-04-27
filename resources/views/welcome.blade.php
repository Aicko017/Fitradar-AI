<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitRadar AI</title>

    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
    </style>
</head>
<body class="bg-[#1E1F9D] text-white">

    <!-- Header -->
    <header class="bg-white text-[#1E1F9D] flex items-center justify-between px-6 py-4 shadow">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('images/lg.png') }}" alt="FitRadar Logo" class="h-10">
            <span class="font-bold text-xl">FITRADAR AI</span>
        </div>
        <nav class="space-x-6 text-sm font-semibold">
            <a href="#tentang" class="hover:underline">Tentang Kami</a>
            <a href="{{ route('login') }}" class="bg-[#1E1F9D] text-white px-4 py-2 rounded hover:bg-blue-800">Masuk</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="beranda" class="flex flex-col items-center text-center py-20 px-6 bg-white text-[#1E1F9D]">
        <h1 class="text-4xl font-bold leading-tight mb-6">
            Tingkatkan <br> Gaya Hidup <br> Sehatmu
        </h1>
        <p class="mb-6 max-w-md">
            Ingin kendalikan pola makanmu? Lacak makananmu, tingkatkan kesehatan, dan capai tujuanmu dengan mudah bersama kami.
        </p>
        <a href="{{ route('login') }}" class="bg-[#28A745] text-white px-6 py-3 rounded hover:bg-green-600 transition">Mulai</a>
    </section>

    <!-- Garis Hijau -->
    <div class="h-3 bg-[#28A745]"></div>

    <!-- Section Dukungan -->
    <section id="tentang" class="text-center py-16 px-6">
        <h2 class="text-2xl font-bold mb-8">Dukungan terbaik untuk <br> kebutuhan kesehatan Anda</h2>
        
        <div class="max-w-4xl mx-auto text-sm leading-relaxed space-y-4">
            <p>Selamat datang di FitRadar AI! Kami dengan antusias mempersembahkan layanan Fitness Evaluation AI, ...</p>
            <p>FitRadar menggunakan teknologi AI untuk menganalisis informasi pengguna dan memberikan rekomendasi diet, ...</p>
            <p>Tujuan kami adalah membantu Anda memahami kebutuhan tubuh Anda, membentuk kebiasaan sehat yang tahan lama, ...</p>
            <p>Harapan kami adalah setiap sesi bersama FitRadar menjadi pengalaman yang membangun motivasi dan membantu Anda ...</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#1E1F9D] text-white text-center py-6 border-t border-white mt-10">
        <div class="flex items-center justify-center space-x-2 mb-2">
            <img src="{{ asset('images/Lg.png') }}" alt="FitRadar Logo" class="h-6">
            <span class="font-bold text-sm">FITRADAR AI</span>
        </div>
        <p class="text-xs">&copy; 2025 FitRadar AI. Hak Cipta dilindungi. Menawarkan solusi untuk anda.</p>
    </footer>

</body>
</html>
