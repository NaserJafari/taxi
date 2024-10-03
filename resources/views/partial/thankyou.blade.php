<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-900">
            {{ __('Thank You') }}
        </h2>
    </x-slot>

    <section class="mx-auto max-w-2xl px-6 py-12 lg:px-8">
        <div class="space-y-6 rounded-lg bg-white p-8 text-center shadow-lg">
            <h2 class="text-2xl font-bold text-gray-800">Thank you for booking a ride!</h2>
            <p class="text-gray-600">Your ride details are ready for review.</p>

            <div class="mt-6">
                <h3 class="mb-4 text-xl font-semibold text-gray-800">Bekijk rit</h3>
                @if (session('ride_id'))
                    <a href="{{ route('ride.show', session('ride_id')) }}"
                        class="inline-block rounded-lg bg-green-500 px-6 py-3 text-white transition duration-200 hover:bg-green-600">
                        Bekijk
                    </a>
                @else
                    <p class="text-red-500">Er is momenteel geen rit beschikbaar.</p>
                @endif
            </div>
        </div>
    </section>
</x-app-layout>
