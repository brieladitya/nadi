<x-app-layout>

<div class="space-y-4">

    <!-- HERO -->

    <div class="bg-white rounded-2xl shadow-sm overflow-hidden">

        <div class="relative overflow-hidden bg-gradient-to-r from-[#061E29] to-[#2F578A] p-10">

            <!-- Batik Pattern -->

            <div class="absolute inset-0 opacity-10">

                
            </div>

            <!-- Graphic Element -->

            <div class="absolute right-0 top-0 h-full w-[40%] overflow-hidden">

                <!-- Circle 1 -->

                <div class="absolute top-[-80px] right-[-60px] w-[280px] h-[280px] rounded-full bg-white/5 border border-white/10"></div>

                <!-- Circle 2 -->

                <div class="absolute bottom-[-120px] right-[40px] w-[320px] h-[320px] rounded-full bg-[#56B6C6]/10 border border-white/10"></div>

                <!-- Circle 3 -->

                <div class="absolute top-[80px] right-[160px] w-[120px] h-[120px] rounded-full bg-white/5"></div>


            </div>

            <!-- Content -->

            <div class="relative z-10">

                <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between gap-8">

                    <!-- Left -->

                    <div>

                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur mb-5">

                            <div class="w-2 h-2 rounded-full bg-[#56B6C6]"></div>

                            <p class="text-sm text-white/90 font-medium">

                                Interoperabilitas Kesehatan Nasional

                            </p>

                        </div>

                        <h1 class="text-5xl font-bold text-white leading-tight mb-6">

                            Cari Rekam Medis
                            Pasien Indonesia

                        </h1>

                        <p class="text-white/75 text-lg max-w-2xl leading-relaxed">

                            Akses data kesehatan nasional secara cepat,
                            aman, dan terintegrasi menggunakan sistem NADI.

                        </p>

                    </div>

                    <!-- Right Card -->

                    
                </div>

            </div>

        </div>

    </div>

    <!-- SEARCH SECTION -->

    <div class="bg-white rounded-2xl shadow-sm p-6">

        <form method="GET"
              action="{{ route('patients.index') }}"
              class="flex flex-col xl:flex-row gap-4">

            <!-- Input -->

            <div class="flex-1 relative">

                <i data-lucide="search"
                   class="w-5 h-5 text-[#2F578A] absolute left-5 top-1/2 -translate-y-1/2"></i>

                <input type="text"
                       name="search"
                       placeholder="Masukkan NIK pasien..."
                       value="{{ request('search') }}"
                       class="w-full h-16 rounded-2xl border-0 bg-[#F7F8FA] pl-14 pr-5 text-[#061E29] focus:ring-0">

            </div>

            <!-- Button -->

            <button
                class="h-16 px-8 rounded-2xl bg-[#061E29] hover:opacity-90 transition text-white font-semibold">

                Cari Pasien

            </button>

        </form>

    </div>

    <!-- RESULT -->

    @if(request('search'))

        @if($patient)

            <!-- FOUND -->

            <div class="bg-white rounded-2xl shadow-sm overflow-hidden">

                <div class="p-8">

                    <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between gap-8">

                        <!-- Left -->

                        <div>

                            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-green-50 mb-5">

                                <div class="w-2 h-2 rounded-full bg-green-500"></div>

                                <p class="font-semibold text-green-600 text-sm">
                                    Pasien Ditemukan
                                </p>

                            </div>

                            <h2 class="text-4xl font-bold text-[#061E29] mb-5">

                                {{ $patient->name }}

                            </h2>

                            <div class="flex flex-wrap gap-4">

                                <div class="bg-[#F7F8FA] rounded-2xl px-5 py-4">

                                    <p class="text-sm text-slate-400 mb-1">
                                        NIK
                                    </p>

                                    <p class="font-semibold text-[#061E29]">
                                        {{ $patient->nik }}
                                    </p>

                                </div>

                                <div class="bg-[#F7F8FA] rounded-2xl px-5 py-4">

                                    <p class="text-sm text-slate-400 mb-1">
                                        Nomor Telepon
                                    </p>

                                    <p class="font-semibold text-[#061E29]">
                                        {{ $patient->phone }}
                                    </p>

                                </div>

                            </div>

                        </div>

                        <!-- Button -->

                        <a href="{{ route('patients.show', $patient->id) }}"
                           class="h-16 px-8 rounded-2xl bg-[#061E29] hover:opacity-90 transition text-white font-semibold flex items-center justify-center gap-3 whitespace-nowrap">

                            <i data-lucide="folder-open"
                               class="w-5 h-5"></i>

                            Buka Rekam Medis

                        </a>

                    </div>

                </div>

            </div>

        @else

            <!-- NOT FOUND -->

            <div class="bg-white rounded-2xl shadow-sm overflow-hidden">

                <div class="p-8">

                    <div class="flex items-center gap-5 mb-8">

                        <div class="w-16 h-16 rounded-2xl bg-red-50 flex items-center justify-center">

                            <i data-lucide="user-x"
                               class="w-7 h-7 text-red-500"></i>

                        </div>

                        <div>

                            <h2 class="text-3xl font-bold text-[#061E29]">
                                Pasien Tidak Ditemukan
                            </h2>

                            <p class="text-slate-500 mt-2">

                                Tidak ada data pasien dalam jaringan NADI.

                            </p>

                        </div>

                    </div>

                    <!-- Action -->

                    <a href="{{ route('patients.create', ['nik' => request('search')]) }}"
                       class="inline-flex items-center justify-center gap-3 h-16 px-8 rounded-2xl bg-[#061E29] hover:opacity-90 transition text-white font-semibold">

                        <i data-lucide="plus"
                           class="w-5 h-5"></i>

                        Tambah Pasien Baru

                    </a>

                </div>

            </div>

        @endif

    @endif

</div>

</x-app-layout>