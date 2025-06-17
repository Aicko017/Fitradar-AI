<x-app-layout>
    <div class="min-h-screen bg-[#1E1F9D] flex flex-col justify-center items-center px-4 sm:px-6 lg:px-8 py-8">
        <h1 class="text-white text-3xl sm:text-4xl font-semibold mb-4 text-center">Tingkatkan Gaya Hidup Sehatmu</h1>
        <p class="text-white text-sm sm:text-base mb-8 text-center max-w-md">
            Mari kita buat rencana yang sesuai dengan jadwalmu,<br>
            baik itu sesi singkat atau rutinitas yang lebih panjang
        </p>

        <form method="POST" action="{{ route('simpan-waktu-olahraga') }}"
              class="bg-white rounded-3xl p-6 sm:p-8 w-full max-w-xl text-center">
            @csrf
            <h2 class="text-black font-bold text-lg sm:text-xl mb-6">
                Ada berapa banyak waktu luangmu<br class="sm:hidden"> untuk berolahraga?
            </h2>

            <div class="space-y-4 text-left">
                <label class="block cursor-pointer">
                    <input type="radio" name="durasi" value="20" class="hidden peer" required>
                    <div class="p-3 rounded-lg border border-gray-300 peer-checked:border-blue-700">
                        <span class="text-red-600 font-bold">20 menit</span>
                        <span class="text-black"> (Saya lebih suka latihan yang cepat dan efisien)</span>
                    </div>
                </label>

                <label class="block cursor-pointer">
                    <input type="radio" name="durasi" value="30" class="hidden peer" required>
                    <div class="p-3 rounded-lg border border-gray-300 peer-checked:border-blue-700">
                        <span class="text-red-600 font-bold">30 menit</span>
                        <span class="text-black"> (Saya cukup waktu untuk latihan yang umum)</span>
                    </div>
                </label>

                <label class="block cursor-pointer">
                    <input type="radio" name="durasi" value="60" class="hidden peer" required>
                    <div class="p-3 rounded-lg border border-gray-300 peer-checked:border-blue-700">
                        <span class="text-red-600 font-bold">60 menit</span>
                        <span class="text-black"> (Saya siap meluangkan waktu lebih untuk latihan yang lebih panjang)</span>
                    </div>
                </label>
            </div>

            <div class="flex flex-col sm:flex-row justify-between gap-4 mt-8">
                <a href="{{ route('halaman-sebelumnya') }}"
                   class="bg-white border border-black text-black font-medium px-6 py-2 rounded-full hover:bg-gray-100 text-center w-full sm:w-auto">
                    Sebelumnya
                </a>
                <a href="{{ route('halaman-preferensi-makan') }}"
                   class="bg-white border border-black text-black font-medium px-6 py-2 rounded-full hover:bg-gray-100 text-center w-full sm:w-auto">
                    Selanjutnya
                </a>
            </div>
        </form>
    </div>
</x-app-layout>
