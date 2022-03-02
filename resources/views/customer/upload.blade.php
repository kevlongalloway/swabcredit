<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="{{ url('../images/logo.png') }}" style="width: 4rem;">
        </x-slot>
        <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload files and documents') }}
        </h2>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('cr.store') }}">
            @csrf
            <div class="mt-4">
                <x-jet-label for="id" value="{{ __('ID (Front)') }}" />
                <x-jet-input id="card-holder-name" class="block mt-1 w-full" type="file" name="card-holder-name"  required />
            </div>
         
            <div class="mt-4">
                <x-jet-label for="idb" value="{{ __('ID (Back)') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="w2" value="{{ __('W2') }}" />
                <x-jet-input id="line1" class="block mt-1 w-full" type="file" name="line1" :value="old('line1')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="line2" value="{{ __('apartment, suite, unit, or building. (Optional)') }}" />
                <x-jet-input id="line2" class="block mt-1 w-full" type="file" name="line2" :value="old('line2')"/>
            </div>
            <div class="mt-4">
                <x-jet-label for="city" value="{{ __('City') }}" />
                <x-jet-input id="city" class="block mt-1 w-full" type="file" name="city" :value="old('city')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="state" value="{{ __('State') }}" />
                <x-jet-input id="state" class="block mt-1 w-full" type="file" name="state" :value="old('state')"  maxlength="2" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="postal_code" value="{{ __('Zip') }}" />
                <x-jet-input id="postal_code" class="block mt-1 w-full" type="file" name="postal_code" :value="old('postal_code')"  maxlength="5" required />
            </div>
            <hr>

            <div class="mt-8">
                <h2 class="relative text-xl font-bold">
                    <span class="side-title">
                        Payment Information
                    </span>
                </h2>
            </div>
            <div class="mt-4">
                <div id="card-errors"></div>
                <div class="py-3 px-1 border border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <div id="card-element"></div>
                </div>

                <div class="mt-8 mb-4">
                    <button class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        Save
                    </button>
                    <button id="card-button" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" data-secret="{{ $intent->client_secret }}">
                        Finish
                    </button> 
                </div>
            </div>
            <!-- <div class="flex items-center justify-end mt-4">
            </div> -->
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

