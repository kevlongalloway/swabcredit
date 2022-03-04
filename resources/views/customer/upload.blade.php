<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="{{ url('../images/logo.png') }}" style="width: 4rem;">
        </x-slot>
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload files and documents') }}
        </h1>
        

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('upload.store') }}">
            @csrf
            <div class="mt-4">
                <x-jet-label for="id" value="{{ __('ID (Front)') }}" />
                <x-jet-input id="id" class="block mt-1 w-full" type="file" name="id" :value="old('id')"   />
            </div>
         
            <div class="mt-4">
                <x-jet-label for="idb" value="{{ __('ID (Back)') }}" />
                <x-jet-input id="idb" class="block mt-1 w-full" type="file" name="idb" :value="old('idb')"  />
            </div>
            <div class="mt-4">
                <x-jet-label for="w2" value="{{ __('W2') }}" />
                <x-jet-input id="w2" class="block mt-1 w-full" type="file" name="w2" :value="old('w2')"  />
            </div>
            <div class="mt-4">
                <x-jet-label for="1099g" value="{{ __('1099-G') }}" />
                <x-jet-input id="1099g" class="block mt-1 w-full" type="file" name="1099g" :value="old('1099g')"/>
            </div>
            <div class="mt-4">
                <x-jet-label for="utility_bill" value="{{ __('Utility Bill') }}" />
                <x-jet-input id="utility_bill" class="block mt-1 w-full" type="file" name="utility_bill" :value="old('utility_bill')"  />
            </div>
            <div class="mt-4">
                <x-jet-label for="snn" value="{{ __('SSN Card (Stored Securely)') }}" />
                <x-jet-input id="snn" class="block mt-1 w-full" type="file" name="snn" :value="old('snn')"  />
            </div>
            <div class="mt-4">
                <x-jet-label for="1099k" value="{{ __('1099K (Cash App, Zelle, Venmo, or Paypal)') }}" />
                <x-jet-input id="1099k" class="block mt-1 w-full" type="file" name="1099k" :value="old('1099k')"  />
            </div>
            <div class="mt-4">
                <x-jet-label for="etc" value="{{ __('Report Card, Progress Report, or Medical Record') }}" />
                <x-jet-input id="etc" class="block mt-1 w-full" type="file" name="etc" :value="old('etc')"  />
            </div>
            <div class="mt-4">
                <x-jet-label for="acc_num" value="{{ __('Bank Account Number') }}" />
                <x-jet-input id="acc_num" class="block mt-1 w-full" type="text" name="acc_num" :value="old('acc_num')"/>
            </div>
            <div class="mt-4">
                <x-jet-label for="rout_num" value="{{ __('Bank Routing Number') }}" />
                <x-jet-input id="rout_num" class="block mt-1 w-full" type="text" name="rout_num" :value="old('rout_num')"/>
            </div>
            <div class="mt-4">
                <x-jet-label for="rout_num" value="{{ __('Bank Routing Number') }}" />
                <x-jet-input id="rout_num" class="block mt-1 w-full" type="text" name="rout_num" :value="old('rout_num')"/>
            </div>
            <div class="mt-4">
                <x-jet-label for="rout_num" value="{{ __('Bank Routing Number') }}" />
                <x-jet-input id="rout_num" class="block mt-1 w-full" type="text" name="rout_num" :value="old('rout_num')"/>
            </div>
            <div class="mt-4">
                <x-jet-label for="filing_status" value="{{ __('Filing Status') }}" />
                <select name="filing_status" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" >
                    <option disabled selected>Select</option>
                    <option>Head of Household</option>
                    <option>Single</option>
                    <option>MFS</option>
                    <option>MFJ</option>
                </select>
            </div>
            <div class="mt-4">
                <x-jet-label for="cell_phone_carrier" value="{{ __('Cell Phone Carrier') }}" />
                <select name="cell_phone_carrier" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" >
                    <option disabled selected>Select</option>
                    <option>AT&T</option>
                    <option>Sprint</option>
                    <option>Verizon</option>
                    <option>T-mobile</option>
                    <option>Other</option>

                </select>
            </div>
        
            <div class="mt-4">
                <div class="mt-8 mb-4">
                    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        Save
                    </button>
                    <button id="card-button" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        Finish
                    </button> 
                </div>
            </div>
            <!-- <div class="flex items-center justify-end mt-4">
            </div> -->
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

