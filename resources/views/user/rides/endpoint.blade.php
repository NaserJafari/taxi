<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-900">
            {{ __('Taxi einde') }}
        </h2>
    </x-slot>
    <section class="relative flex h-screen items-center justify-center bg-cover bg-center"
        style="background-image: url('{{ asset('images/ride_complete.png') }}'); background-size: contain; background-repeat: no-repeat;">
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
                <p><span class="font-semibold text-gray-600">Gebruiker:</span> {{ $ride->user->firstname }}</p>
            </div>

            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-gray-800">Estimates</h3>
                <p><span class="font-semibold text-gray-600">Geschatte Kosten:</span> €{{ $ride->estimate_cost }}</p>
                <p><span class="font-semibold text-gray-600">Geschatte Tijd:</span> {{ $ride->estimate_drive_time }}
                    minuten</p>
            </div>
            <div class="space-y-4">
                <a href="{{ route('ride.create') }}" class="rounded-lg bg-green-500 p-4 text-white">
                    <button>Nieuwe route zoeken</button>
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
