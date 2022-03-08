<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="{{ url('../images/logo.png') }}" style="width: 4rem;">
        </x-slot>
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload files and documents') }}
        </h1>
        
        <style>
            /*input.invalid {
                background-color: #ffdddd;
            }
            .step {
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #bbbbbb;
                border: none;
                border-radius: 50%;
                display: inline-block;
                opacity: 0.5;
            }
            .step.active {
                opacity: 1;
            }
            .step.finish {
            background-color: #04AA6D;
            }  */          
        </style>    
        
        <div class="form-outer">
            <livewire:upload-form />
        </div>
    </x-jet-authentication-card>

</x-guest-layout>


