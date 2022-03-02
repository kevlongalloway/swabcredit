<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="{{ url('../images/logo.png') }}" style="width: 4rem;">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('payment.index') }}">
            @csrf


            <div class="mt-4">
                <x-jet-label for="plan" value="{{ __('Select A Plan') }}" />
                <select name="plan" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="monthly">Monthly - ${{ $plans['monthly'] }}</option>
                    <option value="quarterly">Quarterly - ${{ $plans['quarterly'] }}</option>
                    <option value="annually">Annually (Best Deal) - ${{ $plans['annually'] }}</option>
                </select>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Next') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
