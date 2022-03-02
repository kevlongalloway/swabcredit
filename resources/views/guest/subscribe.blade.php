<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="{{ url('../images/logo.png') }}" style="width: 4rem;">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('to.checkout') }}">
            @csrf
            @livewire('select', ['service' => $service])

            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Next') }}
                </x-jet-button>
            </div>

        </form>
        
    </x-jet-authentication-card>
</x-guest-layout>