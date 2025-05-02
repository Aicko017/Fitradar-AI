<x-guest-layout>
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
            </nav>
        </aside>

        {{-- Main Content --}}
        <main class="flex-1 pl-64 p-8">
            <h1 class="text-3xl font-semibold mb-6 text-center">MENU TERFAVORIT</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Veggie Burger --}}
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ asset('images/veggie_burger.jpg') }}" alt="Veggie Burger" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">VEGGIE BURGER</h2>
                        <p class="text-sm text-gray-600">Burger dengan patty berbahan kacang kedelai.</p>
                    </div>
                </div>

                {{-- Mushroom Rendang --}}
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ asset('images/mushroom_rendang.jpg') }}" alt="Mushroom Rendang" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">MUSHROOM RENDANG</h2>
                        <p class="text-sm text-gray-600">Rendang yang terbuat dari jamur pilihan.</p>
                    </div>
                </div>

                {{-- Earth Dumplings --}}
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ asset('images/earth_dumplings.jpg') }}" alt="Earth Dumplings" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">EARTH DUMPLINGS</h2>
                        <p class="text-sm text-gray-600">Pangsit rebus dengan saus chilli-oil khas Tiongkok.</p>
                    </div>
                </div>

                {{-- Fried Chicken --}}
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ asset('images/fried_chicken.jpg') }}" alt="Fried Chicken" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">FRIED CHICKEN</h2>
                        <p class="text-sm text-gray-600">Terbuat dari tahu pilihan dengan tambahan salad.</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-guest-layout>