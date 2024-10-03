<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-900">
            {{ __('Ride Details for Ride #' . session('ride_id')) }}
        </h2>
    </x-slot>

    <section class="mx-auto max-w-2xl px-6 py-12 lg:px-8">
        <div class="space-y-6 rounded-lg bg-white p-8 shadow-lg">
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-gray-800">Ride Information</h3>
                <p><span class="font-semibold text-gray-600">Begin Locatie:</span> {{ $ride->location }}</p>
                <p><span class="font-semibold text-gray-600">Eind Locatie:</span> {{ $ride->end_location }}</p>
            </div>

            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-gray-800">Driver Information</h3>
                <p><span class="font-semibold text-gray-600">Voornaam:</span> {{ $ride->driver->firstname }}</p>
                <p><span class="font-semibold text-gray-600">Achternaam:</span> {{ $ride->driver->lastname }}</p>
                <p><span class="font-semibold text-gray-600">Status:</span> {{ $ride->status->name }}</p>
            </div>

            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-gray-800">User Information</h3>
                <p><span class="font-semibold text-gray-600">Gebruiker:</span> {{ $ride->user->name }}</p>
            </div>

            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-gray-800">Estimates</h3>
                <p><span class="font-semibold text-gray-600">Geschatte Kosten:</span> €{{ $ride->estimate_cost }}</p>
                <p><span class="font-semibold text-gray-600">Geschatte Tijd:</span> {{ $ride->estimate_drive_time }}
                    minuten</p>
            </div>
        </div>
    </section>
</x-app-layout>
