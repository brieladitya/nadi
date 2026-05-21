<x-app-layout>

<div class="p-6 max-w-3xl mx-auto">

    <h1 class="text-3xl font-bold mb-6">
        Nusantara Health
    </h1>

    <a href="{{ route('patients.all') }}"
       class="bg-gray-800 text-white px-5 py-2 rounded">

        All Patients

    </a>

    <form method="GET"
          action="{{ route('patients.index') }}"
          class="flex gap-3">

        <input type="text"
               name="search"
               placeholder="Input NIK Patient..."
               value="{{ request('search') }}"
               class="w-full border rounded p-3">

        <button class="bg-blue-600 text-white px-6 rounded">
            Search
        </button>

    </form>
    


    @if(request('search'))

        <div class="mt-8">

            @if($patient)

                <div class="border rounded-xl p-6">

                    <h2 class="text-2xl font-bold">
                        {{ $patient->name }}
                    </h2>

                    <p class="mt-2">
                        NIK: {{ $patient->nik }}
                    </p>

                    <p>
                        Phone: {{ $patient->phone }}
                    </p>

                    <a href="{{ route('patients.show', $patient->id) }}"
                       class="inline-block mt-4 bg-green-600 text-white px-5 py-2 rounded">

                        Open Patient Record

                    </a>

                </div>

            @else

                <div class="border rounded-xl p-6">

                    <p class="text-lg mb-4">
                        Patient not found in Nusantara Health Network.
                    </p>

                    <a href="{{ route('patients.create', ['nik' => request('search')]) }}"
                       class="bg-blue-600 text-white px-5 py-2 rounded">

                        Add New Patient

                    </a>

                </div>

            @endif

        </div>

    @endif

</div>

</x-app-layout>