<x-app-layout>

<div class="space-y-4">

    <!-- HERO -->

    <div class="bg-white rounded-2xl shadow-sm overflow-hidden">

        <div class="relative overflow-hidden bg-gradient-to-r from-[#56B6C6] to-[#00B7B5] p-10">

            <!-- Batik Pattern -->

            <div class="absolute inset-0 opacity-10">

                <div class="absolute top-0 left-0 w-full h-full">

                    <svg
                        class="w-full h-full"
                        xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="none"
                        viewBox="0 0 800 400">

                        <defs>

                            <pattern id="batikPattern"
                                     width="80"
                                     height="80"
                                     patternUnits="userSpaceOnUse">

                                <!-- Kawung Inspired -->

                                <circle cx="20" cy="20" r="12"
                                        fill="none"
                                        stroke="white"
                                        stroke-width="2"/>

                                <circle cx="60" cy="20" r="12"
                                        fill="none"
                                        stroke="white"
                                        stroke-width="2"/>

                                <circle cx="20" cy="60" r="12"
                                        fill="none"
                                        stroke="white"
                                        stroke-width="2"/>

                                <circle cx="60" cy="60" r="12"
                                        fill="none"
                                        stroke="white"
                                        stroke-width="2"/>

                                <!-- Center -->

                                <circle cx="40" cy="40" r="8"
                                        fill="none"
                                        stroke="white"
                                        stroke-width="2"/>

                            </pattern>

                        </defs>

                        <rect width="100%"
                              height="100%"
                              fill="url(#batikPattern)" />

                    </svg>

                </div>

            </div>

            <!-- Content -->

            <div class="relative z-10">

                <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between gap-6">

                    <!-- Left -->

                    <div>

                        <p class="text-white/80 mb-4 font-medium">
                            Database Pasien Nasional
                        </p>

                        <h1 class="text-5xl font-bold text-white leading-tight mb-6">

                            Semua Data
                            Pasien NADI

                        </h1>

                        <p class="text-white/80 text-lg max-w-2xl leading-relaxed">

                            Jelajahi rekam medis pasien yang terhubung
                            melalui interoperabilitas rumah sakit nasional.

                        </p>

                    </div>

                    <!-- Button -->

                    <a href="{{ route('patients.index') }}"
                       class="h-16 px-8 rounded-2xl bg-white/20 hover:bg-white/30 backdrop-blur text-white font-semibold transition flex items-center justify-center whitespace-nowrap">

                        Cari Pasien

                    </a>

                </div>

            </div>

        </div>

    </div>

    <!-- TABLE SECTION -->

    <div class="bg-white rounded-2xl shadow-sm overflow-hidden">

        <!-- Header -->

        <div class="px-8 py-6 border-b border-slate-100 flex items-center justify-between">

            <div>

                <h2 class="text-2xl font-bold text-slate-900">
                    Daftar Pasien
                </h2>

                <p class="text-slate-500 mt-1">
                    Data pasien terhubung dalam jaringan NADI
                </p>

            </div>

            <!-- Total -->

            <div class="bg-[#F7F7F7] rounded-2xl px-5 py-3">

                <p class="text-sm text-slate-500">
                    Total Data
                </p>

                <p class="font-bold text-slate-900">
                    {{ $patients->total() }}
                </p>

            </div>

        </div>

        <!-- Table -->

        <div class="overflow-x-auto">

            <table class="w-full">

                <thead class="bg-[#FAFAFA] border-b border-slate-100">

                    <tr>

                        <th class="px-8 py-5 text-left text-sm font-semibold text-slate-500">
                            NIK
                        </th>

                        <th class="px-8 py-5 text-left text-sm font-semibold text-slate-500">
                            Nama Pasien
                        </th>

                        <th class="px-8 py-5 text-left text-sm font-semibold text-slate-500">
                            Nomor Telepon
                        </th>

                        <th class="px-8 py-5 text-left text-sm font-semibold text-slate-500">
                            Aksi
                        </th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($patients as $patient)

                        <tr class="border-b border-slate-100 hover:bg-[#FAFAFA] transition">

                            <!-- NIK -->

                            <td class="px-8 py-6">

                                <div class="bg-[#F7F7F7] rounded-2xl px-4 py-3 inline-flex">

                                    <span class="font-medium text-slate-700">
                                        {{ $patient->nik }}
                                    </span>

                                </div>

                            </td>

                            <!-- Name -->

                            <td class="px-8 py-6">

                                <div class="flex items-center gap-4">

                                    <!-- Avatar -->

                                    <div class="w-12 h-12 rounded-2xl bg-[#56B6C6]/10 flex items-center justify-center">

                                        <i data-lucide="user"
                                           class="w-5 h-5 text-[#56B6C6]"></i>

                                    </div>

                                    <!-- Name -->

                                    <div>

                                        <p class="font-semibold text-slate-900">
                                            {{ $patient->name }}
                                        </p>

                                        <p class="text-sm text-slate-400">
                                            Pasien Terdaftar
                                        </p>

                                    </div>

                                </div>

                            </td>

                            <!-- Phone -->

                            <td class="px-8 py-6">

                                <p class="text-slate-500">
                                    {{ $patient->phone }}
                                </p>

                            </td>

                            <!-- Action -->

                            <td class="px-8 py-6">

                                <a href="{{ route('patients.show', $patient->id) }}"
                                   class="inline-flex items-center gap-2 h-12 px-5 rounded-2xl bg-[#56B6C6] hover:opacity-90 transition text-white font-semibold">

                                    <i data-lucide="folder-open"
                                       class="w-4 h-4"></i>

                                    Buka

                                </a>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

    <!-- Pagination -->

    <div class="bg-white rounded-2xl shadow-sm p-5">

        {{ $patients->links() }}

    </div>

</div>

</x-app-layout>