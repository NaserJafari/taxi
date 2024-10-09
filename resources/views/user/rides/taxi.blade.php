<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-900">
            {{ __('Taxi zoeken') }}
        </h2>
    </x-slot>

    <section class="mx-auto max-w-4xl space-y-8 px-4 py-12 sm:px-6 lg:px-8">
        <div class="space-y-4">
            <div class="rounded-lg bg-white p-6 shadow">
                <h3 class="text-lg font-medium text-gray-800">Van: {{ $location }}</h3>
                <h3 class="text-lg font-medium text-gray-800">Naar: {{ $endlocation }}</h3>
            </div>

            <div class="rounded-lg bg-white p-6 shadow">
                <h3 class="text-lg font-medium text-gray-800">Geschatte prijs: €{{ $estimate_cost }}</h3>
                <h3 class="text-lg font-medium text-gray-800">Geschatte afstand: {{ $estimate_drive_time }} km</h3>
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-semibold text-gray-900">Beschikbare taxichauffeurs</h2>
        </div>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($drivers as $driver)
                <div class="rounded-lg border border-gray-200 bg-white p-6 shadow">
                    <h3 class="text-lg font-semibold text-gray-900">{{ $driver->firstname }} {{ $driver->lastname }}
                    </h3>
                    <p class="text-gray-700">Email: {{ $driver->email }}</p>
                    <p class="text-gray-700">Telefoon: {{ $driver->phone }}</p>
                    <form action="{{ route('ride.accepttaxi') }}" method="post" class="mt-4">
                        @csrf
                        <input type="hidden" name="driver_id" value="{{ $driver->id }}">
                        <button type="submit"
                            class="w-full rounded-lg bg-green-500 py-2 text-white transition duration-200 hover:bg-green-600">
                            Kies taxi
                        </button>
                    </form>
                </div>
            @endforeach
        </div>
    </section>
</x-app-layout>
