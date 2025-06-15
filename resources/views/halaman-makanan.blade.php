<x-app-layout>
    <div class="min-h-screen bg-[#F4F4F4] text-gray-800 flex">

        {{-- Sidebar --}}
        <aside class="fixed top-0 left-0 h-full w-64 bg-[#15168a] text-white p-6 shadow-lg z-10">
            <div class="flex items-center mb-10">
                <img src="{{ asset('images/Logo.png') }}" alt="FitRadar AI Logo" class="h-20 w-auto mr-2">
                <span class="text-xl font-bold leading-tight">FITRADAR<br>AI</span>
            </div>

            <nav class="space-y-4">
                <a href="{{ route('halaman-dashboard') }}" class="flex items-center gap-3 text-gray-300 hover:text-white transition-all">
                     <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0l-2-2m2 2l7 7"></path></svg>
                    <span>Tinjauan</span>
                </a>
                <a href="{{ route('halaman-profil') }}" class="flex items-center gap-3 text-gray-300 hover:text-white transition-all">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    <span>Profil</span>
                </a>
                <a href="{{ route('deteksi') }}" class="flex items-center gap-3 text-gray-300 hover:text-white transition-all">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 11-2 0 1 1 0 012 0zm0 7a1 1 0 11-2 0 1 1 0 012 0zm0 7a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                    <span>Deteksi</span>

                </a>
                <a href="{{ route('halaman-makanan') }}" class="flex items-center gap-3 text-white bg-[#1E1F9D] px-3 py-2 rounded-lg">
                     <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 7v-1c0-1.1.9-2 2-2h12a2 2 0 012 2v1m-1 5h-.586a1 1 0 00-.707.293l-5 5a1 1 0 00-1.414 0l-5-5" />
                    </svg>                    <span>Makanan</span>
                </a>
                <a href="{{ route('halaman-olahraga') }}" class="flex items-center gap-3 text-gray-300 hover:text-white transition-all">
                     <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v-1c0-1.1.9-2 2-2h12a2 2 0 012 2v1m-1 5h-.586a1 1 0 00-.707.293l-5 5a1 1 0 00-1.414 0l-5-5A1 1 0 004.586 12H4m16 0h-.586a1 1 0 01-.707-.293l-5-5a1 1 0 01-1.414 0l-5 5A1 1 0 014.586 12H4"></path></svg>
                    <span>olahraga</span>
                </a>
            </nav>
        </aside>

        {{-- Main Content --}}
        <main class="flex-1 pl-64 p-10">
            <h1 class="text-3xl font-bold text-center text-[#15168a] mb-10">MENU REKOMENDASI MAKANAN</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                {{-- Veggie Burger --}}
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <img src="{{ asset('images/burger.jpeg') }}" alt="Veggie Burger" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold text-[#15168a] mb-2">VEGGIE BURGER</h2>
                        <iframe class="w-full aspect-video rounded"
                            src="https://www.youtube.com/embed/9V0yxi3BYIs"
                            title="Easy Vegan White Bean Burgers" allowfullscreen></iframe>
                    </div>
                </div>

                {{-- Mushroom Rendang --}}
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <img src="{{ asset('images/mushroom.jpeg') }}" alt="Mushroom Rendang" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold text-[#15168a] mb-2">MUSHROOM RENDANG</h2>
                        <iframe class="w-full aspect-video rounded"
                            src="https://www.youtube.com/embed/IDr7wBhxKZo"
                            title="Vegetarian Mushroom Rendang" allowfullscreen></iframe>
                    </div>
                </div>

                {{-- Earth Dumplings --}}
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <img src="{{ asset('images/earth.jpeg') }}" alt="Earth Dumplings" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold text-[#15168a] mb-2">EARTH DUMPLINGS</h2>
                        <iframe class="w-full aspect-video rounded"
                            src="https://www.youtube.com/embed/kNOE8fVbPbg"
                            title="Steamed Vegan Dumplings" allowfullscreen></iframe>
                    </div>
                </div>

                {{-- Fried Chicken (Tofu) --}}
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
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
</x-app-layout>
