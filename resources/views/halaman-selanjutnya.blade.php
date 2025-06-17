<x-app-layout>
    <div class="min-h-screen bg-[#1E1F9D] px-4 sm:px-0">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 py-8">
            <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-lg">

                <!-- Header -->
                <div class="text-center mb-8 text-[#1E1F9D]">
                    <h1 class="text-3xl font-bold mb-2">Tingkatkan Gaya Hidup Sehatmu</h1>
                    <p class="text-sm leading-relaxed">
                        Bantu kami memahami latar belakang Aktivitas Fisik agar<br>
                        kami dapat menyesuaikan rekomendasi khusus untukmu
                    </p>
                </div>

                <!-- Pertanyaan -->
                <div class="mb-6">
                    <h2 class="text-xl font-semibold mb-4 text-center text-[#1E1F9D]">
                        Bagaimana tingkat aktivitas fisikmu sekarang?
                    </h2>

                    <form action="/halaman5" method="GET" class="space-y-3">
                        @csrf

                        <!-- Opsi: Pemula -->
                        <label class="block border border-gray-300 rounded-md p-4 hover:bg-gray-100 cursor-pointer transition">
                            <div class="flex flex-col sm:flex-row sm:items-center">
                                <input type="radio" name="tingkat_aktivitas" value="pemula" class="form-radio-custom">
                                <div class="sm:ml-4 mt-2 sm:mt-0">
                                    <span class="font-semibold text-gray-700 block">Pemula</span>
                                    <p class="text-gray-500 text-sm">(Saya baru memulai dan mempelajari dasar-dasar olahraga)</p>
                                </div>
                            </div>
                        </label>

                        <!-- Opsi: Menengah -->
                        <label class="block border border-gray-300 rounded-md p-4 hover:bg-gray-100 cursor-pointer transition">
                            <div class="flex flex-col sm:flex-row sm:items-center">
                                <input type="radio" name="tingkat_aktivitas" value="menengah" class="form-radio-custom">
                                <div class="sm:ml-4 mt-2 sm:mt-0">
                                    <span class="font-semibold text-gray-700 block">Menengah</span>
                                    <p class="text-gray-500 text-sm">(Saya sudah berolahraga beberapa waktu dan merasa percaya diri dengan sebagian besar latihan)</p>
                                </div>
                            </div>
                        </label>

                        <!-- Opsi: Berpengalaman -->
                        <label class="block border border-gray-300 rounded-md p-4 hover:bg-gray-100 cursor-pointer transition">
                            <div class="flex flex-col sm:flex-row sm:items-center">
                                <input type="radio" name="tingkat_aktivitas" value="berpengalaman" class="form-radio-custom">
                                <div class="sm:ml-4 mt-2 sm:mt-0">
                                    <span class="font-semibold text-gray-700 block">Berpengalaman</span>
                                    <p class="text-gray-500 text-sm">(Saya sudah lama berolahraga dan ingin sesuatu yang menantang)</p>
                                </div>
                            </div>
                        </label>

                        <!-- Tombol Selanjutnya -->
                        <div class="h-6"></div>
                        <div class="text-center">
                            <a href="{{ route('tingkat-waktu') }}"
                               class="bg-[#1E1F9D] text-white px-10 py-3 rounded-full hover:bg-[#15168a] focus:outline-none focus:ring-2 focus:ring-[#1E1F9D] focus:ring-offset-2 transition-all duration-200 font-bold inline-block">
                                Selanjutnya
                            </a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Custom Style -->
    <style>
        .form-radio-custom {
            -webkit-appearance: none;
            appearance: none;
            width: 16px;
            height: 16px;
            border: 1px solid #ccc;
            border-radius: 50%;
            outline: none;
            cursor: pointer;
            display: inline-block;
            vertical-align: middle;
            margin-right: 0.5rem;
            background-color: white;
            background-clip: content-box;
            padding: 2px;
            transition: background-color 0.2s;
        }

        .form-radio-custom:checked {
            background-color: #1E1F9D;
            border-color: #1E1F9D;
        }
    </style>
</x-app-layout>
