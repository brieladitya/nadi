<x-app-layout>

<div class="mb-6">

    <a href="{{ route('patients.all') }}"
       class="inline-flex items-center gap-2 bg-gray-800 text-white px-5 py-2 rounded-xl">

        ← Back to All Patients

    </a>

</div>

<div class="p-6 max-w-5xl mx-auto">

    <!-- Patient Information -->

    <div class="border rounded-2xl p-6 mb-8">

        <h1 class="text-3xl font-bold mb-4">
            {{ $patient->name }}
        </h1>

        <div class="grid grid-cols-2 gap-4">

            <div>
                <p class="text-sm text-gray-500">
                    NIK
                </p>

                <p class="font-semibold">
                    {{ $patient->nik }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">
                    Phone
                </p>

                <p class="font-semibold">
                    {{ $patient->phone }}
                </p>
            </div>

        </div>

    </div>

    <!-- Add Medical Record -->

    <div class="border rounded-2xl p-6 mb-8">

        <h2 class="text-2xl font-bold mb-6">
            Add Medical Record
        </h2>

        <form action="{{ route('medical-records.store', $patient->id) }}"
              method="POST"
              class="space-y-4">

            @csrf

            <div>

                <label class="block mb-2 font-semibold">
                    Diagnosis
                </label>

                <textarea
                    name="diagnosis"
                    rows="3"
                    class="w-full border rounded-xl p-3"
                    required></textarea>

            </div>

            <div>

                <label class="block mb-2 font-semibold">
                    Treatment
                </label>

                <textarea
                    name="treatment"
                    rows="3"
                    class="w-full border rounded-xl p-3"></textarea>

            </div>

            <div>

                <label class="block mb-2 font-semibold">
                    Notes
                </label>

                <textarea
                    name="notes"
                    rows="3"
                    class="w-full border rounded-xl p-3"></textarea>

            </div>

            <div>

                <label class="block mb-2 font-semibold">
                    Visit Date
                </label>

                <input
                    type="date"
                    name="visit_date"
                    class="border rounded-xl p-3"
                    required>

            </div>

            <button class="bg-blue-600 text-white px-6 py-3 rounded-xl">

                Save Medical Record

            </button>

        </form>

    </div>

    <!-- Medical History -->

    <div>

        <h2 class="text-2xl font-bold mb-6">
            Medical History
        </h2>

        @forelse($patient->medicalRecords as $record)

            <div class="border rounded-2xl p-6 mb-4">

                <div class="flex justify-between items-start mb-4">

                    <div>

                        <p class="font-bold text-lg">
                            {{ $record->hospital->hospital_name ?? 'Unknown Hospital' }}
                        </p>

                        <p class="text-sm text-gray-500">
                            {{ $record->visit_date }}
                        </p>

                    </div>

                </div>

                <div class="mb-4">

                    <p class="font-semibold mb-1">
                        Diagnosis
                    </p>

                    <p>
                        {{ $record->diagnosis }}
                    </p>

                </div>

                <div class="mb-4">

                    <p class="font-semibold mb-1">
                        Treatment
                    </p>

                    <p>
                        {{ $record->treatment }}
                    </p>

                </div>

                <div>

                    <p class="font-semibold mb-1">
                        Notes
                    </p>

                    <p>
                        {{ $record->notes }}
                    </p>

                </div>

            </div>

        @empty

            <div class="border rounded-2xl p-6">

                <p>
                    No medical records found.
                </p>

            </div>

        @endforelse

    </div>

</div>

</x-app-layout>