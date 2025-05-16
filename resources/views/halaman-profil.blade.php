<x-app-layout>
    <div class="min-h-screen bg-[#1E1F9D] text-white flex">
        <div class="fixed top-0 left-0 h-full w-64 bg-[#15168a] p-6">
            <div class="flex items-center mb-8">
                <img src="{{ asset('images/Logo.png') }}" alt="FitRadar AI Logo" class="h-20 w-auto mr-2">
                <span class="text-xl font-semibold">FITRADAR<br>AI</span>
            </div>
            <nav class="space-y-4">
                <a href="halaman-dashboard" class="flex items-center text-gray-300 hover:text-white">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0l-2-2m2 2l7 7"></path></svg>
                    <span>Tinjauan</span>
                </a>
                <a href="halaman-profil" class="flex items-center text-gray-300 hover:text-white">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    <span>Profil</span>
                </a>
                <a href="deteksi" class="flex items-center text-gray-300 hover:text-white">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 11-2 0 1 1 0 012 0zm0 7a1 1 0 11-2 0 1 1 0 012 0zm0 7a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                    <span>Deteksi</span>
                </a>
                <a href="halaman-makanan" class="flex items-center text-gray-300 hover:text-white">
                <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 7v-1c0-1.1.9-2 2-2h12a2 2 0 012 2v1m-1 5h-.586a1 1 0 00-.707.293l-5 5a1 1 0 00-1.414 0l-5-5" />
                    </svg>                    <span>Makanan</span>

                </a>
                <a href="halaman-olahraga" class="flex items-center text-gray-300 hover:text-white">
                    <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v-1c0-1.1.9-2 2-2h12a2 2 0 012 2v1m-1 5h-.586a1 1 0 00-.707.293l-5 5a1 1 0 00-1.414 0l-5-5A1 1 0 004.586 12H4m16 0h-.586a1 1 0 01-.707-.293l-5-5a1 1 0 01-1.414 0l-5 5A1 1 0 014.586 12H4"></path></svg>
                    <span>olahraga</span>
                </a>
            </nav>
        </div>

        <main class="flex-1 ml-64 p-8">
            <h1 class="text-2xl font-semibold mb-6 text-center">Profile</h1>
            <div class="bg-white text-[#2d3748] rounded-lg shadow-md p-6">
                <form action="/profile" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Name</label>
                        <input type="text" name="name" id="name" value="Nama Pengguna" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div>
                        <label for="gender" class="block text-sm font-semibold text-gray-700 mb-2">Gender</label>
                        <div class="flex gap-4">
                            <label class="inline-flex items-center text-gray-700">
                                <input type="radio" class="form-radio h-4 w-4 text-indigo-600" name="gender" value="male" checked>
                                <span class="ml-2">Male</span>
                            </label>
                            <label class="inline-flex items-center text-gray-700">
                                <input type="radio" class="form-radio h-4 w-4 text-indigo-600" name="gender" value="female">
                                <span class="ml-2">Female</span>
                            </label>
                        </div>
                    </div>

                    <div>
                        <label for="birthday" class="block text-sm font-semibold text-gray-700 mb-2">Birthday</label>
                        <div class="flex gap-2">
                            <select name="birthday_day" id="birthday_day" class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">Day</option>
                                <option value="01" selected>01</option>
                                <option value="02">02</option>
                            </select>
                            <select name="birthday_month" id="birthday_month" class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">Month</option>
                                <option value="01">01</option>
                                <option value="02" selected>02</option>
                            </select>
                            <select name="birthday_year" id="birthday_year" class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">Year</option>
                                <option value="2000">2000</option>
                                <option value="1999" selected>1999</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="height" class="block text-sm font-semibold text-gray-700 mb-2">Height (cm)</label>
                        <div class="flex items-center">
                            <input type="number" name="height" id="height" value="175" class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full">
                            <span class="ml-2 text-gray-700 text-sm">CM</span>
                        </div>
                    </div>

                    <div>
                        <label for="current_weight" class="block text-sm font-semibold text-gray-700 mb-2">Current Weight (kg)</label>
                        <div class="flex items-center">
                            <input type="number" name="current_weight" id="current_weight" value="70" class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full">
                            <span class="ml-2 text-gray-700 text-sm">KG</span>
                        </div>
                    </div>

                    <div class="md:col-span-2">
                        <label for="bmi" class="block text-sm font-semibold text-gray-700 mb-2">BMI</label>
                        <input type="text" id="bmi" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-gray-200 cursor-not-allowed" value="22.86" readonly>
                        <p class="text-xs italic text-gray-600 mt-1">Your BMI can't be edited as it is a function of your weight & height.</p>
                    </div>

                    <div class="md:col-span-2 flex justify-end">
                        <button type="submit" class="bg-[#007bff] hover:bg-[#0056b3] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Selanjutnya
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</x-app-layout>