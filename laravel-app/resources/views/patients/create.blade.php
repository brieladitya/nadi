<x-app-layout>

    <div class="p-6 max-w-xl">

        <h1 class="text-2xl font-bold mb-6">
            Add Patient
        </h1>

        <form action="{{ route('patients.store') }}"
              method="POST"
              class="space-y-4">

            @csrf

            <div>
                <label>NIK</label>

                <input type="text"
                        name="nik"
                        value="{{ request('nik') }}"
                        class="w-full border rounded p-2">
            </div>

            <div>
                <label>Name</label>

                <input type="text"
                       name="name"
                       class="w-full border rounded p-2">
            </div>

            <div>
                <label>Phone</label>

                <input type="text"
                       name="phone"
                       class="w-full border rounded p-2">
            </div>

            <button class="bg-blue-500 text-white px-4 py-2 rounded">
                Save Patient
            </button>

        </form>

    </div>

</x-app-layout>