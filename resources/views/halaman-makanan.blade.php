<x-app-layout>
    <div class="min-h-screen bg-[#1E1F9D] text-white flex flex-col lg:flex-row">
        <!-- SIDEBAR (Desktop) -->
        <aside class="hidden lg:block fixed top-0 left-0 h-full w-64 bg-[#15168a] text-white p-6 z-40">
            <div class="flex items-center mb-8">
                <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="h-20 w-auto mr-2">
                <span class="text-xl font-semibold leading-tight">FITRADAR<br>AI</span>
            </div>
            <nav class="space-y-4">
                <a href="{{ route('halaman-dashboard') }}" class="flex items-center text-gray-300 hover:text-white">Tinjauan</a>
                <a href="{{ route('halaman-profil') }}" class="flex items-center text-gray-300 hover:text-white">Profil</a>
                <a href="{{ route('deteksi') }}" class="flex items-center text-gray-300 hover:text-white">Deteksi</a>
                <a href="{{ route('halaman-makanan') }}" class="flex items-center text-white bg-[#1E1F9D] px-3 py-2 rounded-lg">Makanan</a>
                <a href="{{ route('halaman-olahraga') }}" class="flex items-center text-gray-300 hover:text-white">Olahraga</a>
            </nav>
        </aside>

        <!-- MOBILE HEADER -->
        <div class="lg:hidden bg-[#15168a] p-4 flex items-center justify-between z-50">
            <button id="mobileMenuBtn" class="text-white p-2 hover:bg-[#1E1F9D] rounded-lg transition-colors">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="flex items-center">
                <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="h-10 w-auto mr-2">
                <span class="text-lg font-bold">FITRADAR AI</span>
            </div>
            <div class="w-10"></div>
        </div>

        <!-- MOBILE MENU -->
        <div id="mobileMenu" class="lg:hidden hidden bg-[#15168a] px-4 py-2 space-y-2 z-40">
            <a href="{{ route('halaman-dashboard') }}" class="block text-white hover:text-gray-300">Tinjauan</a>
            <a href="{{ route('halaman-profil') }}" class="block text-white hover:text-gray-300">Profil</a>
            <a href="{{ route('deteksi') }}" class="block text-white hover:text-gray-300">Deteksi</a>
            <a href="{{ route('halaman-makanan') }}" class="block bg-[#1E1F9D] text-white px-3 py-1 rounded">Makanan</a>
            <a href="{{ route('halaman-olahraga') }}" class="block text-white hover:text-gray-300">Olahraga</a>
        </div>

        <!-- MAIN CONTENT -->
        <main class="flex-1 lg:pl-64 p-6">
            <h1 class="text-4xl font-bold text-center text-white mb-10">MENU REKOMENDASI MAKANAN</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <!-- VEGETARIAN BURGER -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden text-gray-800">
                    <img src="{{ asset('images/burger.jpeg') }}" alt="Veggie Burger" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold text-[#15168a] mb-2">VEGGIE BURGER</h2>
                        <iframe class="w-full aspect-video rounded"
                            src="https://www.youtube.com/embed/9V0yxi3BYIs"
                            title="Easy Vegan White Bean Burgers" allowfullscreen></iframe>
                    </div>
                </div>

                <!-- MUSHROOM RENDANG -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden text-gray-800">
                    <img src="{{ asset('images/mushroom.jpeg') }}" alt="Mushroom Rendang" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold text-[#15168a] mb-2">MUSHROOM RENDANG</h2>
                        <iframe class="w-full aspect-video rounded"
                            src="https://www.youtube.com/embed/IDr7wBhxKZo"
                            title="Vegetarian Mushroom Rendang" allowfullscreen></iframe>
                    </div>
                </div>

                <!-- EARTH DUMPLINGS -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden text-gray-800">
                    <img src="{{ asset('images/earth.jpeg') }}" alt="Earth Dumplings" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold text-[#15168a] mb-2">EARTH DUMPLINGS</h2>
                        <iframe class="w-full aspect-video rounded"
                            src="https://www.youtube.com/embed/kNOE8fVbPbg"
                            title="Steamed Vegan Dumplings" allowfullscreen></iframe>
                    </div>
                </div>

                <!-- FRIED CHICKEN TOFU -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden text-gray-800">
                    <img src="{{ asset('images/fried.jpeg') }}" alt="Fried Chicken" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold text-[#15168a] mb-2">FRIED CHICKEN (Tofu)</h2>
                        <iframe class="w-full aspect-video rounded"
                            src="https://www.youtube.com/embed/c0V_7jYtTyg"
                            title="Vegan Fried Chicken from Tofu" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- SCRIPT UNTUK TOGGLE MENU RESPONSIVE -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const btn = document.getElementById('mobileMenuBtn');
            const menu = document.getElementById('mobileMenu');

            btn.addEventListener('click', function () {
                menu.classList.toggle('hidden');
            });

            document.addEventListener('click', function (e) {
                setTimeout(() => {
                    if (!menu.contains(e.target) && !btn.contains(e.target)) {
                        menu.classList.add('hidden');
                    }
                }, 100);
            });

            window.addEventListener('scroll', function () {
                menu.classList.add('hidden');
            });

            document.querySelectorAll('#mobileMenu a').forEach(link => {
                link.addEventListener('click', () => {
                    menu.classList.add('hidden');
                });
            });
        });
    </script>
</x-app-layout>
