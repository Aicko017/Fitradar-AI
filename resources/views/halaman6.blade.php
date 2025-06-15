<x-app-layout>
    <div class="min-h-screen" style="background-color: #1E1F9D;">
        
                
    <div class="min-h-screen bg-[#1E1F9D] py-8 text-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-8 text-center">
                <h2 class="text-2xl font-semibold">Especially for Malnutrition we recommend</h2>
                <p class="text-lg">this to help you improve</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white text-[#1E1F9D] rounded-2xl p-6 shadow-md">
                    <h3 class="text-xl font-semibold mb-4 text-center">Makanan</h3>

                    <div>
                        <h4 class="font-semibold mb-2">Makan Pagi</h4>
                        <div class="mb-8 grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <img src="{{ asset('images/kentang.jpg') }}" alt="3 kentang sedang" class="rounded-md w-full h-auto">
                                <p class="text-sm mt-1">3 kentang sedang</p>
                            </div>
                            <div>
                                <img src="{{ asset('images/sayur1.jpeg') }}" alt="Orak-arik sayuran" class="rounded-md w-full h-auto">
                                <p class="text-sm mt-1">2 scoops whey protein berbasis protein,<br>1 cup bayam cincang,<br>1/2 cup jamur iris,<br>2 sendok teh minyak zaitun,<br>3 telur besar, orak-arik, 1 ons keju cheddar rendah lemak</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-2">Makan Siang</h4>
                        <div class="mb-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <img src="{{ asset('images/ikan.jpeg') }}" alt="Ikan tuna" class="rounded-md w-full h-auto">
                                <p class="text-sm mt-1">Ikan tuna (170 gram)<br>Kalori: Sekitar 200<br>Protein: Sekitar 40 gram<br>Karbohidrat: 0 gram<br>Lemak: Sekitar 2 gram<br>Vitamin & mineral: Sumber vitamin D dan B12<br>Serat: 0 gram</p>
                            </div>
                            <div>
                                <img src="{{ asset('images/salad.jpeg') }}" alt="Salad ayam" class="rounded-md w-full h-auto">
                                <p class="text-sm mt-1">Potongan dada ayam (100 gram)<br>Kalori: Sekitar 165<br>Protein: Sekitar 31 gram<br>Karbohidrat: 0 gram<br>Lemak: Sekitar 3.6 gram<br>Vitamin & mineral: Sumber vitamin B<br>Serat: Tergantung sayuran yang ditambahkan</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-2">Makan Malam</h4>
                        <div class="mb-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <img src="{{ asset('images/salmon.jpeg') }}" alt="Salmon panggang" class="rounded-md w-full h-auto">
                                <p class="text-sm mt-1">Salmon (115-150 gram)<br>Kalori: Sekitar 150-250<br>Protein: Sekitar 22-25 gram<br>Lemak: Sedang hingga tinggi (tergantung jenis)<br>Karbohidrat: 0 gram<br>Vitamin & mineral: Tinggi akan Omega-3, vitamin D, dan B</p>
                            </div>
                            <div>
                                <img src="{{ asset('images/steak.jpeg') }}" alt="Steak tanpa lemak" class="rounded-md w-full h-auto">
                                <p class="text-sm mt-1">Potongan steak tanpa lemak (100 gram)<br>Kalori: Sekitar 150-200<br>Protein: Sekitar 25-30 gram<br>Lemak: Rendah (tergantung potongan)<br>Karbohidrat: 0 gram<br>Vitamin & mineral: Tinggi akan zat besi dan B</p>
                            </div>
                            <div>
                                <img src="{{ asset('images/yogurt.jpeg') }}" alt="Yogurt Yunani" class="rounded-md w-full h-auto">
                                <p class="text-sm mt-1">Yogurt Yunani tanpa lemak (170 gram)<br>Kalori: Sekitar 100<br>Protein: Sekitar 17 gram<br>Karbohidrat: Sekitar 6-7 gram<br>Lemak: 0 gram<br>Kalsium: Tinggi<br>Tambahan: Beri atau sedikit madu (opsional)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white text-[#1E1F9D] rounded-2xl p-6 shadow-md">
                    <h3 class="text-xl font-semibold mb-4 text-center">Olahraga</h3>

                    <div>
                        <h4 class="font-semibold mb-2">Cardio (Jogging/Berjalan Cepat)</h4>
                        <div class="mb-4 flex items-center gap-4">
                            <img src="{{ asset('images/cardio.jpeg') }}" alt="Cardio" class="rounded-md w-1/3 h-auto">
                            <div>
                                <p class="text-sm">Durasi: Untuk pemula, bisa dimulai dengan 20-30 menit.</p>
                                <p class="text-sm">Tingkatkan durasi secara bertahap hingga 45-60 menit.</p>
                                <p class="text-sm">Frekuensi: 3-5 kali seminggu.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-2">Latihan Kekuatan (Squat)</h4>
                        <div class="mb-4 flex items-center gap-4">
                            <img src="{{ asset('images/squat.jpeg') }}" alt="Squat" class="rounded-md w-1/3 h-auto">
                            <div>
                                <p class="text-sm">Repetisi: Untuk pemula, 8-12 repetisi per set. Lakukan 2-3 set.</p>
                                <p class="text-sm">Istirahat: 60-90 detik antara set atau lebih sesuai dengan peningkatan kekuatan.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-2">Latihan Kekuatan (Push-up)</h4>
                        <div class="mb-4 flex items-center gap-4">
                            <img src="{{ asset('images/pushup.jpeg') }}" alt="Push-up" class="rounded-md w-1/3 h-auto">
                            <div>
                                <p class="text-sm">Durasi: Untuk pemula, bisa dimulai dengan 20-30 menit.</p>
                                <p class="text-sm">Tingkatkan durasi secara bertahap hingga 45-60 menit.</p>
                                <p class="text-sm">Frekuensi: 3-5 kali seminggu.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-2">Latihan Kekuatan (Lunge)</h4>
                        <div class="mb-4 flex items-center gap-4">
                            <img src="{{ asset('images/lunge.jpeg') }}" alt="Lunge" class="rounded-md w-1/3 h-auto">
                            <div>
                                <p class="text-sm">Untuk pemula, 8-12 repetisi per kaki per set. Lakukan 2-3 set per kaki.</p>
                                <p class="text-sm">Modifikasi: Lakukan tanpa beban atau jika menguasai tambahkan dumbbell seiring dengan peningkatan kekuatan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-right">
            <a href="{{ route('halaman-dashboard') }}" class="bg-[#73DE3F] text-black px-6 py-3 rounded-full hover:bg-[#66CD33] focus:outline-none focus:ring-2 focus:ring-[#73DE3F] focus:ring-offset-2 font-semibold">
    Selanjutnya
</a>

            </div>
        </div>
    </div>
</x-app-layout>