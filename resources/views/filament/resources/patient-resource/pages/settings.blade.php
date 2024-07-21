<x-filament::page>
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-2xl mx-auto">
        <h2 class="text-3xl font-extrabold mb-6 text-center text-gray-800">Invoice for {{ $patient->name }}</h2>
        <form action="{{ route('invoices.store') }}" method="POST">
            @csrf
            <input type="hidden" name="patient_id" value="{{ $patient->id }}">

            <div class="mb-6">
                <label for="owner_name" class="block text-gray-700 font-medium">Owner Name</label>
                <input type="text" id="owner_name" name="owner_name" value="{{ $patient->owner->name }}" readonly
                    class="mt-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-6">
                <label for="treatments" class="block text-gray-700 font-medium">Treatments</label>
                <ul class="mt-2 list-disc list-inside bg-gray-50 p-4 rounded-md shadow-inner">
                    @foreach ($patient->treatments as $treatment)
                        <li class="py-1 text-gray-800">{{ $treatment->description }} -
                            ${{ number_format($treatment->price, 2) }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="mb-6">
                <label for="total" class="block text-gray-700 font-bold">Total Amount</label>
                <p class="mt-2 text-2xl font-semibold text-gray-900">
                    ${{ number_format($patient->treatments->sum('price'), 2) }}</p>
            </div>

            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-black font-bold py-3 px-6 rounded-lg shadow-md transition duration-150 ease-in-out">
                Create Invoice
            </button>
        </form>
    </div>
</x-filament::page>
