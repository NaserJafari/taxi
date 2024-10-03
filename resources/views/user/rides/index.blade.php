<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-900">
            {{ __('Rides') }}
        </h2>
    </x-slot>

    <section class="mx-auto max-w-4xl px-4 py-12 sm:px-6 lg:px-8">
        <div class="space-y-8">
            <h1 class="text-2xl font-semibold text-gray-800">
                Hello, {{ Auth::user()->firstname }}
            </h1>

            <div class="flex justify-center">
                <a href="{{ route('ride.create') }}"
                    class="inline-flex items-center justify-center rounded-lg bg-yellow-500 px-6 py-3 text-sm font-medium text-white shadow transition duration-200 ease-in-out hover:bg-yellow-400">
                    Rit zoeken
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
