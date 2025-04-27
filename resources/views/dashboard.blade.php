<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Isi Profil') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#1E1F9D] p-8 rounded-2xl shadow-lg">
                
                <!-- Judul -->
                <div class="text-center mb-10 text-white">
                    <h1 class="text-3xl font-bold mb-2" style="font-family: 'Comic Sans MS', cursive, sans-serif;">Isi Profil mu</h1>
                    <p class="text-sm leading-relaxed">
                        Bantu kami melihat latar belakang mu agar<br>
                        kami dapat menyesuaikan rekomendasi khusus untukmu
                    </p>
                </div>

                <!-- Form Profile -->
                <div class="bg-white p-8 rounded-2xl shadow-md">
                    <form method="POST" action="#" id="profile-form" class="space-y-6 text-black">
                        @csrf

                        <!-- Nama -->
                        <div class="flex items-center">
                            <div class="w-1/2 font-semibold">Nama</div>
                            <div class="w-1/2 text-right">
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                    class="border-b border-gray-300 w-3/4 text-right focus:outline-none font-semibold text-black">
                            </div>
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="flex items-center">
                            <div class="w-1/2 font-semibold">Jenis Kelamin</div>
                            <div class="w-1/2 flex justify-end gap-6">
                                <label class="flex items-center gap-2 font-semibold">
                                    <input type="radio" name="gender" value="male" required class="accent-[#1E1F9D]"> Male
                                </label>
                                <label class="flex items-center gap-2 font-semibold">
                                    <input type="radio" name="gender" value="female" class="accent-[#1E1F9D]"> Female
                                </label>
                            </div>
                        </div>

                        <!-- Tanggal Lahir -->
                        <div class="flex items-center">
                            <div class="w-1/2 font-semibold">Tanggal Lahir</div>
                            <div class="w-1/2 flex justify-end gap-2">
                                <input type="text" name="day" placeholder="DD" maxlength="2"
                                    class="border-b border-gray-300 w-12 text-center focus:outline-none font-semibold text-black" required>
                                <input type="text" name="month" placeholder="MM" maxlength="2"
                                    class="border-b border-gray-300 w-12 text-center focus:outline-none font-semibold text-black" required>
                                <input type="text" name="year" placeholder="YYYY" maxlength="4"
                                    class="border-b border-gray-300 w-20 text-center focus:outline-none font-semibold text-black" required>
                            </div>
                        </div>

                        <!-- Tinggi Badan -->
                        <div class="flex items-center">
                            <div class="w-1/2 font-semibold">Tinggi Badan</div>
                            <div class="w-1/2 flex justify-end items-center gap-2">
                                <input type="number" name="height"
                                    class="border-b border-gray-300 w-16 text-center focus:outline-none font-semibold text-black" required>
                                <span class="text-sm font-semibold text-black">CM</span>
                            </div>
                        </div>

                        <!-- Berat Badan -->
                        <div class="flex items-center">
                            <div class="w-1/2 font-semibold">Berat Badan</div>
                            <div class="w-1/2 flex justify-end items-center gap-2">
                                <input type="number" name="weight"
                                    class="border-b border-gray-300 w-16 text-center focus:outline-none font-semibold text-black" required>
                                <span class="text-sm font-semibold text-black">KG</span>
                            </div>
                        </div>

                        <!-- BMI -->
                        <div class="flex items-center">
                            <div class="w-1/2 font-semibold">BMI</div>
                            <div class="w-1/2 text-right text-xs text-gray-500 font-semibold">
                                Your BMI can't be edited as it is a<br>function of your weight & height.
                            </div>
                        </div>

                        <!-- Tombol Selanjutnya -->
                        <div class="text-center mt-8">
                            <button type="submit" form="profile-form"
                                class="bg-[#1E1F9D] text-white px-10 py-3 rounded-full hover:bg-[#15168a] transition-all duration-200 font-bold">
                                Selanjutnya
                            </button>
                        </div>

                    </form>
                </div>
            </div>

            <!-- Dashboard Message -->
            <div class="mt-12">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 text-center text-lg font-semibold">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

