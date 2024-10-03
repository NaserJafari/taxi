<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-900">
            {{ __('Ride zoeken') }}
        </h2>
    </x-slot>

    <section class="mx-auto max-w-3xl px-6 py-12 lg:px-8">
        <div class="mb-8">
            <h1 class="text-2xl font-semibold text-gray-800">Hello, {{ Auth::user()->firstname }}</h1>
        </div>

        <form action="{{ route('ride.location') }}" method="post" class="space-y-6 rounded-lg bg-white p-8 shadow-lg">
            @csrf
            <div class="space-y-4">
                <div>
                    <label for="location" class="block font-medium text-gray-700">Locatie</label>
                    <input id="location" type="text" name="location"
                        class="w-full rounded-lg border border-gray-300 p-3 transition duration-200 focus:border-green-500 focus:ring focus:ring-green-300"
                        placeholder="Vul je huidige locatie in">
                </div>

                <div>
                    <label for="endlocation" class="block font-medium text-gray-700">Eind locatie</label>
                    <input id="endlocation" type="text" name="endlocation"
                        class="w-full rounded-lg border border-gray-300 p-3 transition duration-200 focus:border-green-500 focus:ring focus:ring-green-300"
                        placeholder="Vul je eindbestemming in">
                </div>
            </div>

            <div>
                <button type="submit"
                    class="w-full rounded-lg bg-green-500 py-3 text-white transition duration-200 hover:bg-green-600">
                    Boek taxi
                </button>
            </div>
        </form>
    </section>
</x-app-layout>
