<x-app-layout>
    <div class="py-8" style="background-color: #1E1F9D;">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="p-8 rounded-2xl shadow-lg">

                <div class="text-center mb-10 text-white">
                    <h1 class="text-3xl font-bold mb-2" style="font-family: 'Comic Sans MS', cursive, sans-serif;">Isi Profil mu</h1>
                    <p class="text-sm leading-relaxed">
                        Bantu kami melihat latar belakang mu agar<br>
                        kami dapat menyesuaikan rekomendasi khusus untukmu
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-md">
                    <form method="POST" action="{{ route('halaman-profil')}}" id="profile-form" class="space-y-6 text-black">
                        @csrf

                        <div class="flex items-center">
                            <div class="w-1/2 font-semibold">Nama</div>
                            <div class="w-1/2 text-right">
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                       class="border-b border-gray-300 w-3/4 text-right focus:outline-none font-semibold text-black">
                            </div>
                        </div>

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

                        <div class="flex items-center">
                            <div class="w-1/2 font-semibold">Tinggi Badan</div>
                            <div class="w-1/2 flex justify-end items-center gap-2">
                                <input type="number" name="height"
                                       class="border-b border-gray-300 w-16 text-center focus:outline-none font-semibold text-black" required>
                                <span class="text-sm font-semibold text-black">CM</span>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-1/2 font-semibold">Berat Badan</div>
                            <div class="w-1/2 flex justify-end items-center gap-2">
                                <input type="number" name="weight"
                                       class="border-b border-gray-300 w-16 text-center focus:outline-none font-semibold text-black" required>
                                <span class="text-sm font-semibold text-black">KG</span>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-1/2 font-semibold">BMI</div>
                            <div class="w-1/2 text-right text-xs text-gray-500 font-semibold">
                                Your BMI can't be edited as it is a<br>function of your weight & height.
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-1/2 font-semibold">Tingkat Aktivitas</div>
                            <div class="w-1/2 flex justify-end gap-6">
                                <label class="flex items-center gap-2 font-semibold">
                                    <input type="radio" name="activity_level" value="low" class="accent-[#1E1F9D]" required> Low
                                </label>
                                <label class="flex items-center gap-2 font-semibold">
                                    <input type="radio" name="activity_level" value="moderate" class="accent-[#1E1F9D]" required> Moderate
                                </label>
                                <label class="flex items-center gap-2 font-semibold">
                                    <input type="radio" name="activity_level" value="high" class="accent-[#1E1F9D]" required> High
                                </label>
                            </div>
                        </div>

                        <div class="text-center mt-8">
                            <a href="{{ url('/halaman-selanjutnya') }}"
                               class="bg-[#1E1F9D] text-white px-10 py-3 rounded-full hover:bg-[#15168a] transition-all duration-200 font-bold">
                                Selanjutnya
                            </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>