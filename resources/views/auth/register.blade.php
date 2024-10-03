<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Firstname -->
        <div>
            <x-input-label for="firstname" :value="__('First name')" />
            <x-text-input id="firstname" class="mt-1 block w-full" type="text" name="firstname" :value="old('firstname')"
                required autofocus autocomplete="firstname" />
            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
        </div>

        <!-- Lastname -->
        <div>
            <x-input-label for="lastname" :value="__('Last name')" />
            <x-text-input id="lastname" class="mt-1 block w-full" type="text" name="lastname" :value="old('lastname')"
                required autofocus autocomplete="lastname" />
            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Phone -->
        <div>
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="phone" class="mt-1 block w-full" type="text" name="phone" :value="old('phone')"
                required autofocus autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="mt-1 block w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="mt-1 block w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-4 flex items-center justify-end">
            <a href="{{ route('login') }}"
                class="ms-3 inline-flex items-center rounded-md border border-transparent bg-gray-800 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-gray-900">
                Heb je al een account
            </a>

            <x-primary-button class="ms-4">
                {{ __('Registreer') }}
            </x-primary-button>
    </form>
</x-guest-layout>
