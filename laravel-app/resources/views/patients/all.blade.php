<x-app-layout>

<div class="p-6">

    <div class="flex justify-between items-center mb-6">

        <div>

            <h1 class="text-3xl font-bold">
                All Patients
            </h1>

            <p class="text-gray-500">
                Nusantara Health National Database
            </p>

        </div>

        <a href="{{ route('patients.index') }}"
           class="bg-blue-600 text-white px-5 py-2 rounded">

            Patient Lookup

        </a>

    </div>

    <div class="border rounded-xl overflow-hidden">

        <table class="w-full">

            <thead class="bg-gray-100">

                <tr>

                    <th class="p-4 text-left">
                        NIK
                    </th>

                    <th class="p-4 text-left">
                        Name
                    </th>

                    <th class="p-4 text-left">
                        Phone
                    </th>

                    <th class="p-4 text-left">
                        Action
                    </th>

                </tr>

            </thead>

            <tbody>

                @foreach($patients as $patient)

                    <tr class="border-t">

                        <td class="p-4">
                            {{ $patient->nik }}
                        </td>

                        <td class="p-4">
                            {{ $patient->name }}
                        </td>

                        <td class="p-4">
                            {{ $patient->phone }}
                        </td>

                        <td class="p-4 flex gap-2">

                            <a href="{{ route('patients.show', $patient->id) }}"
                               class="bg-green-600 text-white px-4 py-2 rounded">

                                Open

                            </a>

                            <form action="{{ route('patients.destroy', $patient->id) }}"
                                  method="POST">

                                @csrf
                                @method('DELETE')

                                <button class="bg-red-600 text-white px-4 py-2 rounded">

                                    Delete

                                </button>

                            </form>

                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

    <div class="mt-6">

        {{ $patients->links() }}

    </div>

</div>

</x-app-layout>