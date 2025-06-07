<x-app-layout>
    <div class="min-h-screen bg-[#1E1F9D] text-white flex flex-col lg:flex-row">
        <!-- Sidebar - Hidden on mobile, shown on desktop -->
        <div class="hidden lg:block fixed top-0 left-0 h-full w-64 bg-[#15168a] p-6 z-50">
            <div class="flex items-center mb-8">
                <img src="{{ asset('images/Logo.png') }}" alt="FitRadar AI Logo" class="h-20 w-auto mr-2">
                <span class="text-xl font-semibold">FITRADAR<br>AI</span>
            </div>
            <nav class="space-y-4">
                <a href="halaman-dashboard" class="flex items-center text-gray-300 hover:text-white transition-colors">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0l-2-2m2 2l7 7"></path></svg>
                    <span>Tinjauan</span>
                </a>
                <a href="halaman-profil" class="flex items-center text-white bg-[#1E1F9D] px-3 py-2 rounded-lg">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    <span>Profil</span>
                </a>
                <a href="deteksi" class="flex items-center text-gray-300 hover:text-white transition-colors">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 11-2 0 1 1 0 012 0zm0 7a1 1 0 11-2 0 1 1 0 012 0zm0 7a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                    <span>Deteksi</span>
                </a>
                <a href="halaman-makanan" class="flex items-center text-gray-300 hover:text-white transition-colors">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v-1c0-1.1.9-2 2-2h12a2 2 0 012 2v1m-1 5h-.586a1 1 0 00-.707.293l-5 5a1 1 0 00-1.414 0l-5-5" />
                    </svg>
                    <span>Makanan</span>
                </a>
                <a href="halaman-olahraga" class="flex items-center text-gray-300 hover:text-white transition-colors">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v-1c0-1.1.9-2 2-2h12a2 2 0 012 2v1m-1 5h-.586a1 1 0 00-.707.293l-5 5a1 1 0 00-1.414 0l-5-5A1 1 0 004.586 12H4m16 0h-.586a1 1 0 01-.707-.293l-5-5a1 1 0 01-1.414 0l-5 5A1 1 0 014.586 12H4"></path></svg>
                    <span>Olahraga</span>
                </a>
            </nav>
        </div>

        <!-- Mobile Header -->
        <div class="lg:hidden bg-[#15168a] p-4 flex items-center justify-between">
            <button id="mobileMenuBtn" class="text-white p-2 hover:bg-[#1E1F9D] rounded-lg transition-colors">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            <div class="flex items-center">
                <img src="{{ asset('images/Logo.png') }}" alt="FitRadar AI Logo" class="h-10 w-auto mr-2">
                <span class="text-lg font-semibold">FITRADAR AI</span>
            </div>
            <div class="w-10"></div> <!-- Spacer untuk balance -->
        </div>

        <!-- Mobile Navigation -->
        <div id="mobileMenu" class="lg:hidden hidden bg-[#15168a] p-4">
            <nav class="space-y-3">
                <a href="halaman-dashboard" class="flex items-center text-gray-300 hover:text-white py-2">
                    <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0l-2-2m2 2l7 7"></path></svg>
                    <span>Tinjauan</span>
                </a>
                <a href="halaman-profil" class="flex items-center text-white bg-[#1E1F9D] px-3 py-2 rounded-lg">
                    <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    <span>Profil</span>
                </a>
                <a href="deteksi" class="flex items-center text-gray-300 hover:text-white py-2">
                    <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 11-2 0 1 1 0 012 0zm0 7a1 1 0 11-2 0 1 1 0 012 0zm0 7a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                    <span>Deteksi</span>
                </a>
                <a href="halaman-makanan" class="flex items-center text-gray-300 hover:text-white py-2">
                    <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v-1c0-1.1.9-2 2-2h12a2 2 0 012 2v1m-1 5h-.586a1 1 0 00-.707.293l-5 5a1 1 0 00-1.414 0l-5-5" />
                    </svg>
                    <span>Makanan</span>
                </a>
                <a href="halaman-olahraga" class="flex items-center text-gray-300 hover:text-white py-2">
                    <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v-1c0-1.1.9-2 2-2h12a2 2 0 012 2v1m-1 5h-.586a1 1 0 00-.707.293l-5 5a1 1 0 00-1.414 0l-5-5A1 1 0 004.586 12H4m16 0h-.586a1 1 0 01-.707-.293l-5-5a1 1 0 01-1.414 0l-5 5A1 1 0 014.586 12H4"></path></svg>
                    <span>Olahraga</span>
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <main class="flex-1 lg:ml-64 p-4 sm:p-6 lg:p-8">
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
                                    <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}"
                                            {{ $day == str_pad($i, 2, '0', STR_PAD_LEFT) ? 'selected' : '' }}>
                                        {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}
                                    </option>
                                    @endfor
                                </select>
                            </div>
                            <div>
                                <select name="month" id="birthday_month" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500">
                                    <option value="">Month</option>
                                    @for ($i = 1; $i <= 12; $i++)
                                    @php
                                    $monthValue = str_pad($i, 2, '0', STR_PAD_LEFT);
                                    @endphp
                                    <option value="{{ $monthValue }}" {{ $month == $monthValue ? 'selected' : '' }}>
                                        {{ $monthValue }}
                                    </option>
                                    @endfor
                                </select>
                            </div>
                            <div>
                                <select name="year" id="birthday_year" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500">
                                    <option value="">Year</option>
                                    @for ($i = date('Y'); $i >= 1950; $i--)
                                    <option value="{{ $i }}" {{ $year == $i ? 'selected' : '' }}>
                                        {{ $i }}
                                    </option>
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
                                <input type="number" name="height" id="height" 
                                       value="{{ old('height', $healthData->height ?? '') }}" 
                                       class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500 w-full"
                                       placeholder="170"
                                       onchange="calculateBMI()">
                                <span class="ml-2 text-gray-700 text-sm whitespace-nowrap">CM</span>
                            </div>
                        </div>

                        <div>
                            <label for="weight" class="block text-sm font-semibold text-gray-700 mb-2">Current Weight (kg)</label>
                            <div class="flex items-center">
                                <input type="number" name="weight" id="weight" 
                                       value="{{ old('weight', $healthData->weight ?? '') }}" 
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
                               value="{{ number_format($healthData->bmi ?? 0, 2) }}" 
                               readonly>
                        <p class="text-xs italic text-gray-600 mt-1">Your BMI can't be edited as it is a function of your weight & height.</p>
                    </div>

                    <!-- Activity Level -->
                    <div class="w-full">
                        <label for="activity_level" class="block text-sm font-semibold text-gray-700 mb-2">Activity Level</label>
                        <select name="activity_level" id="activity_level" 
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500">
                            <option value="">Select Activity Level</option>
                            <option value="low" {{ old('activity_level', $healthData->activity_level ?? '') == 'low' ? 'selected' : '' }}>Low</option>
                            <option value="moderate" {{ old('activity_level', $healthData->activity_level ?? '') == 'moderate' ? 'selected' : '' }}>Moderate</option>
                            <option value="high" {{ old('activity_level', $healthData->activity_level ?? '') == 'high' ? 'selected' : '' }}>High</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-center sm:justify-end pt-4">
                        <button type="submit" 
                                class="w-full sm:w-auto bg-[#007bff] hover:bg-[#0056b3] text-white font-bold py-3 px-8 rounded focus:outline-none focus:shadow-outline transition-colors duration-200">
                            Selanjutnya
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script>
        // Mobile menu toggle
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('hidden');
        });

        // BMI Calculator
        function calculateBMI() {
            const height = document.getElementById('height').value;
            const weight = document.getElementById('weight').value;
            
            if (height && weight) {
                const heightInMeters = height / 100;
                const bmi = weight / (heightInMeters * heightInMeters);
                document.getElementById('bmi').value = bmi.toFixed(2);
            }
        }

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const mobileMenu = document.getElementById('mobileMenu');
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            
            if (!mobileMenu.contains(event.target) && !mobileMenuBtn.contains(event.target)) {
                mobileMenu.classList.add('hidden');
            }
        });
    </script>
</x-app-layout>