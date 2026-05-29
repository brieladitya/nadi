<x-app-layout>

<div class="space-y-4">

    <!-- STATS -->

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-3">

        <!-- Total Pasien -->

        <div class="bg-white rounded-2xl border border-white p-6 shadow-sm">

            <div class="flex items-start justify-between">

                <div>

                    <div class="flex gap-2">

                        <i data-lucide="users"
                           class="w-5 h-5 text-[#121358]"></i>

                        <p class="text-sm font-semibold">
                            Total Pasien
                        </p>

                    </div>

                    <h2 class="text-4xl font-bold mt-4 text-[#2F578A]">
                        {{ \App\Models\Patient::count() }}
                    </h2>

                </div>

            </div>

        </div>

        <!-- Rekam Medis -->

        <div class="bg-white rounded-2xl border border-white p-6 shadow-sm">

            <div class="flex items-start justify-between">

                <div>

                    <div class="flex gap-2">

                        <i data-lucide="file-heart"
                           class="w-5 h-5 text-[#121358]"></i>

                        <p class="text-sm font-semibold">
                            Rekam Medis
                        </p>

                    </div>

                    <h2 class="text-4xl font-bold mt-4 text-[#2F578A]">
                        {{ \App\Models\MedicalRecord::count() }}
                    </h2>

                </div>

            </div>

        </div>

        <!-- Rumah Sakit Aktif -->

        <div class="bg-white rounded-2xl border border-white p-6 shadow-sm">

            <div class="flex items-start justify-between">

                <div>

                    <div class="flex gap-2">

                        <i data-lucide="building-2"
                           class="w-5 h-5 text-[#121358]"></i>

                        <p class="text-sm font-semibold">
                            Rumah Sakit Aktif
                        </p>

                    </div>

                    <h2 class="text-4xl font-bold mt-4 text-[#2F578A]">
                        {{ \App\Models\Hospital::count() }}
                    </h2>

                </div>

            </div>

        </div>

        <!-- Blockchain -->

        <div class="bg-white rounded-2xl border border-white p-6 shadow-sm">

            <div class="flex items-start justify-between">

                <div>

                    <div class="flex gap-2">

                        <i data-lucide="shield-check"
                           class="w-5 h-5 text-[#121358]"></i>

                        <p class="text-sm font-semibold">
                            Status Blockchain
                        </p>

                    </div>

                    <div class="flex items-center gap-2 mt-5">

                        <div class="w-3 h-3 rounded-full bg-green-500"></div>

                        <p class="font-semibold text-green-600">
                            Terhubung
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- AI SECTION -->

    <div class="bg-white rounded-2xl border border-white shadow-sm overflow-hidden">

    <!-- Top -->

    <div class="px-8 pt-8 pb-6">

        <div class="flex items-center gap-4 mb-8">

            <!-- Text -->

            <div>

                <p class="text-sm text-slate-400 mb-1">
                    NADI AI
                </p>

                <h2 class="text-4xl font-bold tracking-tight text-slate-900">

                    Halo! Ada yang bisa saya bantu?

                </h2>

            </div>

        </div>

    </div>

    <!-- Chatfield -->

    <div class="px-8 pb-8">

        <div class="bg-[#F7F8FA] rounded-[36px] border border-slate-100 p-5">

            <!-- Textarea -->

            <textarea
                rows="2"
                placeholder="Tanyakan apa saja kepada NADI AI"
                class="w-full resize-none bg-transparent border-0 focus:ring-0 text-[16px] text-slate-700 placeholder:text-slate-400 leading-relaxed"></textarea>

            <!-- Bottom -->

            <div class="flex items-center justify-between mt-5">

                <!-- Left Actions -->

                <div class="flex items-center gap-3">

                    <!-- Attachment -->

                    <button
                        class="w-11 h-11 rounded-full hover:bg-white transition flex items-center justify-center">

                        <i data-lucide="paperclip"
                           class="w-5 h-5 text-[#121358]"></i>

                    </button>

                    <!-- Voice -->

                    <button
                        class="w-11 h-11 rounded-full hover:bg-white transition flex items-center justify-center">

                        <i data-lucide="mic"
                           class="w-5 h-5 text-[#121358]"></i>

                    </button>

                </div>

                <!-- Send -->

                <button
                    class="w-12 h-12 rounded-full bg-[#061E29] hover:opacity-90 transition flex items-center justify-center shadow-sm">

                    <i data-lucide="arrow-up"
                       class="w-5 h-5 text-white"></i>

                </button>

            </div>

        </div>

    </div>

</div>

    <!-- QUICK ACTIONS -->

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <!-- Cari Pasien -->

        <a href="{{ route('patients.index') }}"
           class="bg-white border border-white rounded-2xl p-6 hover:border-[#2F578A] hover:bg-[#2F578A] hover:text-white transition shadow-sm">
            <h3 class="text-2xl font-bold mb-3">
                Cari Pasien
            </h3>

            <p class="text-slate-400 leading-relaxed">
                Cari data pasien nasional menggunakan interoperabilitas NIK.
            </p>

        </a>

        <!-- Semua Pasien -->

        <a href="{{ route('patients.all') }}"
           class="bg-white border border-white rounded-2xl p-6 hover:border-[#2F578A] hover:bg-[#2F578A] hover:text-white transition shadow-sm">


            <h3 class="text-2xl font-bold mb-3">
                Semua Pasien
            </h3>

            <p class="text-slate-400 leading-relaxed">
                Jelajahi rekam kesehatan nasional yang terhubung dalam NADI.
            </p>

        </a>

    </div>

</div>

</x-app-layout>