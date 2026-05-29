<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <meta name="csrf-token"
          content="{{ csrf_token() }}">

    <title>NADI</title>

   <!-- Urbanist -->

<link rel="preconnect"
      href="https://fonts.googleapis.com">

<link rel="preconnect"
      href="https://fonts.gstatic.com"
      crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet">

<style>

    body {
        font-family: 'Urbanist', sans-serif;
    }

</style>

    <!-- Lucide -->

    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Styles -->

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        [x-cloak] {
            display: none !important;
        }

    </style>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>

<body class="bg-[#061E29]">

<div
    x-cloak
    x-data="{
        sidebarOpen: localStorage.getItem('sidebarOpen') === 'false'
            ? false
            : true,

        toggleSidebar() {

            this.sidebarOpen = !this.sidebarOpen

            localStorage.setItem(
                'sidebarOpen',
                this.sidebarOpen
            )
        }
    }"
    class="w-screen h-screen overflow-hidden">

    <div class="w-full h-full flex gap-0.2">

        <!-- SIDEBAR CARD -->

        <aside
            x-bind:class="sidebarOpen ? 'w-72' : 'w-24'"
            class="relative bg-white shadow-sm transition-all duration-300 flex flex-col shrink-0">

            <!-- Toggle -->

            <button
                @click="toggleSidebar()"
                class="absolute -right-5 top-20 z-50 w-9 h-9 rounded-full bg-white border border-slate-200 shadow-sm hover:bg-slate-100 transition flex items-center justify-center">

                <!-- Collapse -->

                <i
                    x-show="sidebarOpen"
                    data-lucide="panel-left-close"
                    class="w-4 h-4 text-slate-600"></i>

                <!-- Expand -->

                <i
                    x-show="!sidebarOpen"
                    data-lucide="panel-left-open"
                    class="w-4 h-4 text-slate-600"></i>

            </button>

            <!-- Sidebar Content -->

            <div class="flex flex-col h-full p-6">

                <!-- Brand -->

                <div class="mb-12 mt-2">

                

                </div>

                <!-- Navigation -->

                <div class="space-y-2">

                    <!-- Dashboard -->

                    <a href="{{ route('dashboard') }}"
                       class="flex items-center gap-4 h-16 px-4 rounded-2xl transition-all duration-200
                       {{ request()->routeIs('dashboard')
                            ? 'bg-[#061E29] text-white'
                            : 'text-slate-600 hover:bg-slate-100' }}">

                        <i data-lucide="layout-dashboard"
                           class="w-5 h-5 shrink-0"></i>

                        <span
                            x-show="sidebarOpen"
                            class="font-medium whitespace-nowrap">

                            Dashboard

                        </span>

                    </a>

                    <!-- Lookup -->

                    <a href="{{ route('patients.index') }}"
                       class="flex items-center gap-4 h-16 px-4 rounded-2xl transition-all duration-200
                       {{ request()->routeIs('patients.index')
                            ? 'bg-[#061E29] text-white'
                            : 'text-slate-600 hover:bg-slate-100' }}">

                        <i data-lucide="search"
                           class="w-5 h-5 shrink-0"></i>

                        <span
                            x-show="sidebarOpen"
                            class="font-medium whitespace-nowrap">

                            Patient Lookup

                        </span>

                    </a>

                    <!-- All Patients -->

                    <a href="{{ route('patients.all') }}"
                       class="flex items-center gap-4 h-16 px-4 rounded-2xl transition-all duration-200
                       {{ request()->routeIs('patients.all')
                            ? 'bg-[#061E29] text-white'
                            : 'text-slate-600 hover:bg-slate-100' }}">

                        <i data-lucide="users"
                           class="w-5 h-5 shrink-0"></i>

                        <span
                            x-show="sidebarOpen"
                            class="font-medium whitespace-nowrap">

                            All Patients

                        </span>

                    </a>

                </div>

            </div>

        </aside>

        <!-- RIGHT SIDE -->

        <div class="flex-1 flex gap-0.2 flex-col overflow-hidden">

            <!-- HEADER CARD -->

            <header class="h-20 bg-white px-8 flex items-center justify-between shrink-0 shadow-[0_10px_30px_rgba(6,30,41,0.08)] border-b border-slate-100">

    <!-- Dynamic Title -->

    <div>

        <h1 class="text-2xl font-bold text-slate-900 tracking-tight">

            @if(request()->routeIs('dashboard'))
                Dashboard
            @elseif(request()->routeIs('patients.index'))
                Patient Lookup
            @elseif(request()->routeIs('patients.all'))
                All Patients
            @else
                NADI
            @endif

        </h1>

    </div>

    <!-- Right Side -->

    <div class="flex items-center gap-4">

        <!-- Profile -->

        <div class="flex items-center gap-4">

            <div class="text-right">

                <h3 class="font-semibold text-[15px] text-slate-900">
                    {{ Auth::user()->name }}
                </h3>

                <p class="text-sm text-slate-400">
                    {{ Auth::user()->hospital->hospital_name ?? 'No Hospital' }}
                </p>

            </div>

            <!-- Avatar -->

            <div class="w-10 h-10 rounded-full bg-black text-white flex items-center justify-center font-semibold">

                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}

            </div>

        </div>

    </div>

</header>

            <!-- CONTENT CARD -->

            <main class="flex-1 overflow-y-auto bg-[#f5f5f5] shadow-sm p-6">

                {{ $slot }}

            </main>

        </div>

    </div>

</div>

<!-- Lucide -->

<script>

    lucide.createIcons();

</script>

</body>

</html>