<x-app-layout>
    <div class="min-h-screen bg-[#1E1F9D] text-white flex flex-col lg:flex-row">
        <!-- Sidebar (Desktop) -->
        <aside class="hidden lg:block fixed top-0 left-0 h-full w-64 bg-[#15168a] p-6 shadow-lg z-10">
            <div class="flex items-center mb-10">
                <img src="{{ asset('images/Logo.png') }}" alt="FitRadar AI Logo" class="h-20 w-auto mr-2">
                <span class="text-xl font-bold leading-tight">FITRADAR<br>AI</span>
            </div>
            <nav class="space-y-4">
                <a href="{{ route('halaman-dashboard') }}" class="flex items-center gap-3 text-gray-300 hover:text-white transition-all">Tinjauan</a>
                <a href="{{ route('halaman-profil') }}" class="flex items-center gap-3 text-white bg-[#1E1F9D] px-3 py-2 rounded-lg">Profil</a>
                <a href="{{ route('deteksi') }}" class="flex items-center gap-3 text-gray-300 hover:text-white transition-all">Deteksi</a>
                <a href="{{ route('halaman-makanan') }}" class="flex items-center gap-3 text-gray-300 hover:text-white transition-all">Makanan</a>
                <a href="{{ route('halaman-olahraga') }}" class="flex items-center gap-3 text-gray-300 hover:text-white transition-all">Olahraga</a>
            </nav>
        </aside>

        <!-- Mobile Header -->
        <div class="lg:hidden bg-[#15168a] p-4 flex items-center justify-between">
            <button id="mobileMenuBtn" class="text-white p-2 hover:bg-[#1E1F9D] rounded-lg transition-colors">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="flex items-center">
                <img src="{{ asset('images/Logo.png') }}" alt="FitRadar AI Logo" class="h-10 w-auto mr-2">
                <span class="text-lg font-semibold">FITRADAR AI</span>
            </div>
            <div class="w-10"></div>
        </div>

        <!-- Mobile Sidebar -->
        <div id="mobileMenu" class="lg:hidden hidden bg-[#15168a] px-4 py-2 space-y-2">
            <a href="{{ route('halaman-dashboard') }}" class="block text-white hover:text-gray-300">Tinjauan</a>
            <a href="{{ route('halaman-profil') }}" class="block bg-[#1E1F9D] text-white px-3 py-1 rounded">Profil</a>
            <a href="{{ route('deteksi') }}" class="block text-white hover:text-gray-300">Deteksi</a>
            <a href="{{ route('halaman-makanan') }}" class="block text-white hover:text-gray-300">Makanan</a>
            <a href="{{ route('halaman-olahraga') }}" class="block text-white hover:text-gray-300">Olahraga</a>
        </div>

        <!-- Main Content -->
        <main class="flex-1 lg:pl-64 p-6 pt-4">
            {{-- ⬇️ Kode halaman profil kamu dimulai dari sini, tidak diubah sama sekali --}}
            <h1 class="text-xl sm:text-2xl font-semibold mb-6 text-center">Profile</h1>

            <div class="bg-white text-[#2d3748] rounded-lg shadow-md p-4 sm:p-6 max-w-4xl mx-auto">
                <form action="{{ route('halaman-profil.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- Name -->
                    <div class="w-full">
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Name</label>
                        <input type="text" name="name" id="name" 
                               value="{{ old('name', $healthData->name ?? $user->name) }}" 
                               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500">
                    </div>

                    <!-- Gender -->
                    <div class="w-full">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Gender</label>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <label class="inline-flex items-center text-gray-700 cursor-pointer">
                                <input type="radio" class="form-radio h-4 w-4 text-indigo-600" name="gender" value="male" 
                                       {{ old('gender', $healthData->gender ?? '') == 'male' ? 'checked' : '' }}>
                                <span class="ml-2">Male</span>
                            </label>
                            <label class="inline-flex items-center text-gray-700 cursor-pointer">
                                <input type="radio" class="form-radio h-4 w-4 text-indigo-600" name="gender" value="female"
                                       {{ old('gender', $healthData->gender ?? '') == 'female' ? 'checked' : '' }}>
                                <span class="ml-2">Female</span>
                            </label>
                        </div>
                    </div>

                    <!-- Birthdate -->
                    <div class="w-full">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Date of Birth</label>
                        @php
                        $birthdate = $healthData->birthdate ?? null;
                        $day = $birthdate ? date('d', strtotime($birthdate)) : '';
                        $month = $birthdate ? date('m', strtotime($birthdate)) : '';
                        $year = $birthdate ? date('Y', strtotime($birthdate)) : '';
                        @endphp

                        <div class="grid grid-cols-3 gap-2 sm:gap-4">
                            <div>
                                <select name="day" id="birthday_day" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500">
                                    <option value="">Day</option>
                                    @for ($i = 1; $i <= 31; $i++)
                                    <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}" {{ $day == str_pad($i, 2, '0', STR_PAD_LEFT) ? 'selected' : '' }}>
                                        {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}
                                    </option>
                                    @endfor
                                </select>
                            </div>
                            <div>
                                <select name="month" id="birthday_month" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500">
                                    <option value="">Month</option>
                                    @for ($i = 1; $i <= 12; $i++)
                                    @php $monthValue = str_pad($i, 2, '0', STR_PAD_LEFT); @endphp
                                    <option value="{{ $monthValue }}" {{ $month == $monthValue ? 'selected' : '' }}>{{ $monthValue }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div>
                                <select name="year" id="birthday_year" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500">
                                    <option value="">Year</option>
                                    @for ($i = date('Y'); $i >= 1950; $i--)
                                    <option value="{{ $i }}" {{ $year == $i ? 'selected' : '' }}>{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Height and Weight Row -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                        <div>
                            <label for="height" class="block text-sm font-semibold text-gray-700 mb-2">Height (cm)</label>
                            <div class="flex items-center">
                                <input type="number" name="height" id="height" value="{{ old('height', $healthData->height ?? '') }}" 
                                       class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500 w-full"
                                       placeholder="170"
                                       onchange="calculateBMI()">
                                <span class="ml-2 text-gray-700 text-sm whitespace-nowrap">CM</span>
                            </div>
                        </div>
                        <div>
                            <label for="weight" class="block text-sm font-semibold text-gray-700 mb-2">Current Weight (kg)</label>
                            <div class="flex items-center">
                                <input type="number" name="weight" id="weight" value="{{ old('weight', $healthData->weight ?? '') }}" 
                                       class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500 w-full"
                                       placeholder="70"
                                       onchange="calculateBMI()">
                                <span class="ml-2 text-gray-700 text-sm whitespace-nowrap">KG</span>
                            </div>
                        </div>
                    </div>

                    <!-- BMI -->
                    <div class="w-full">
                        <label for="bmi" class="block text-sm font-semibold text-gray-700 mb-2">BMI</label>
                        <input type="text" id="bmi" 
                               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-gray-200 cursor-not-allowed" 
                               value="{{ number_format($healthData->bmi ?? 0, 2) }}" readonly>
                        <p class="text-xs italic text-gray-600 mt-1">Your BMI can't be edited as it is a function of your weight & height.</p>
                    </div>

                    <!-- Activity Level -->
                    <div class="w-full">
                        <label for="activity_level" class="block text-sm font-semibold text-gray-700 mb-2">Activity Level</label>
                        <select name="activity_level" id="activity_level" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500">
                            <option value="">Select Activity Level</option>
                            <option value="low" {{ old('activity_level', $healthData->activity_level ?? '') == 'low' ? 'selected' : '' }}>Low</option>
                            <option value="moderate" {{ old('activity_level', $healthData->activity_level ?? '') == 'moderate' ? 'selected' : '' }}>Moderate</option>
                            <option value="high" {{ old('activity_level', $healthData->activity_level ?? '') == 'high' ? 'selected' : '' }}>High</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-center sm:justify-end pt-4">
                        <button type="submit" class="w-full sm:w-auto bg-[#007bff] hover:bg-[#0056b3] text-white font-bold py-3 px-8 rounded focus:outline-none focus:shadow-outline transition-colors duration-200">
                            Selanjutnya
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script>
        document.getElementById('mobileMenuBtn').addEventListener('click', function () {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        });

        document.addEventListener('click', function (event) {
            const menu = document.getElementById('mobileMenu');
            const btn = document.getElementById('mobileMenuBtn');
            if (!menu.contains(event.target) && !btn.contains(event.target)) {
                menu.classList.add('hidden');
            }
        });

        function calculateBMI() {
            const height = document.getElementById('height').value;
            const weight = document.getElementById('weight').value;
            if (height && weight) {
                const heightInMeters = height / 100;
                const bmi = weight / (heightInMeters * heightInMeters);
                document.getElementById('bmi').value = bmi.toFixed(2);
            }
        }
    </script>
</x-app-layout>
