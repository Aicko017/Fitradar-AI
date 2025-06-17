<x-app-layout>
    <div class="min-h-screen" style="background-color: #1E1F9D;">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-lg text-center">

                <div class="mb-8" style="color: #1E1F9D;">
                    <h1 class="text-3xl font-bold mb-2" style="font-family: cursive;">Tingkatkan Gaya Hidup Sehatmu</h1>
                </div>

                <div class="mb-6">
                    <h2 class="text-xl font-semibold mb-4" style="color: #1E1F9D;">Hebat! Kamu baru saja<br>membuat kemajuan besar<br>dalam perjalananmu ini.</h2>
                    </h2>

                    <p class="text-gray-700 leading-relaxed mb-6 text-sm sm:text-base">
                        Tahu nggak sih? Mencatat apa yang kamu makan itu cara<br class="hidden sm:inline">
                        yang sudah terbukti ampuh banget biar sukses!<br class="hidden sm:inline">
                        Namanya "memantau diri sendiri", dan makin rutin kamu melakukannya,<br class="hidden sm:inline">
                        makin besar peluangmu buat meraih impianmu.
                    </p>

                    <div class="flex flex-col sm:flex-row justify-between items-center gap-4 mt-8">
                        <a href="{{ route('halaman-sebelumnya') }}" 
                           class="bg-gray-300 text-gray-700 px-6 py-3 rounded-full hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-offset-2 w-full sm:w-auto text-center">
                            Sebelumnya
                        </a>
                        <a href="{{ route('halaman6') }}" 
                           class="bg-[#1E1F9D] text-white px-10 py-3 rounded-full hover:bg-[#15168a] focus:outline-none focus:ring-2 focus:ring-[#1E1F9D] focus:ring-offset-2 transition-all duration-200 font-bold w-full sm:w-auto text-center">
                            Selanjutnya
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
