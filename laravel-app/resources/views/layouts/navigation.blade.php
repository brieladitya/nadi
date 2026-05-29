<div class="w-72 bg-white border-r border-slate-200 min-h-screen p-6">

    <!-- Brand -->

    <div class="mb-10">

        <div class="w-12 h-12 rounded-2xl bg-blue-600 flex items-center justify-center text-white text-xl font-bold mb-4">

            N

        </div>

        <h1 class="text-2xl font-bold">
            NADI
        </h1>

        <p class="text-sm text-slate-500 mt-1">
            National Healthcare Network
        </p>

    </div>

    <!-- Navigation -->

    <div class="space-y-2">

        <a href="{{ route('dashboard') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-2xl transition
           {{ request()->routeIs('dashboard') ? 'bg-blue-600 text-white' : 'text-slate-600 hover:bg-slate-100' }}">

            <span>🏠</span>

            <span class="font-medium">
                Dashboard
            </span>

        </a>

        <a href="{{ route('patients.index') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-2xl transition
           {{ request()->routeIs('patients.index') ? 'bg-blue-600 text-white' : 'text-slate-600 hover:bg-slate-100' }}">

            <span>🔎</span>

            <span class="font-medium">
                Patient Lookup
            </span>

        </a>

        <a href="{{ route('patients.all') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-2xl transition
           {{ request()->routeIs('patients.all') ? 'bg-blue-600 text-white' : 'text-slate-600 hover:bg-slate-100' }}">

            <span>👥</span>

            <span class="font-medium">
                All Patients
            </span>

        </a>

    </div>

    <!-- Bottom -->

    <div class="absolute bottom-6 left-6 right-6">

        <form method="POST"
              action="{{ route('logout') }}">

            @csrf

            <button
                class="w-full bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-2xl py-3 font-medium transition">

                Logout

            </button>

        </form>

    </div>

</div>