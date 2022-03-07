<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="{{ url('../images/logo.png') }}" style="width: 4rem;">
        </x-slot>
        <div class="py-1 px-1">
            <div class="block mt-4">
                <h1 class="text-4xl text-blue-700 text-center mb-4">{{ $title }}</h1>
            </div>
            <div class="mt-4">
                <h2 class="text-center">{{ $message }}</h2>
            </div>


            <div class="flex items-center justify-center mt-8 mb-2">
                <a href="{{ route('dashboard') }}" class="text-center inline-flex justify-center text-center items-center px-4 py-4 bg-blue-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-900 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-300 disabled:opacity-25 transition" style="width:100%;">
                    {{ __('Next') }}
                </a>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
