<div>
    <form id="upForm" wire:submit.prevent="submit">
        @csrf
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>

        <div id="message">
            {{ $message }}
        </div>
        @if($start == false)
            <h1>Upload Documents</h1>
            <a href="#" class="ml-4" wire:click="start">
                {{ __('Start') }}
            </a>
        @else
        @if ($errors->any())
            <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>
            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        @if($currentStep == 1)
            <div id="ids">
                <div class="mt-4">
                    <x-jet-label for="idf" value="{{ __('ID (Front)') }}" />
                    <input type="file" wire:model="idf">
                </div>
                <div class="mt-4">
                    <x-jet-label for="idb" value="{{ __('ID (Back)') }}" />
                    <x-jet-input id="idb" wire:model="idb" class="block mt-1 w-full" type="file" name="idb" :value="old('idb')"  />
                </div>
            </div>
        @endif
        @if($currentStep == 2)
        <div id="docs">
            <div class="mt-4">
                <x-jet-label for="filing_status" value="{{ __('Filing Status') }}" />
                <select name="filing_status" wire:model="filing_status" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" >
                    <option disabled selected>Select</option>
                    <option value="HOH">Head of Household</option>
                    <option value="S">Single</option>
                    <option value="MFS">MFS</option>
                    <option value="MFJ">MFJ</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="carrier" value="{{ __('Cell Phone Carrier') }}" />
                <select name="carrier" wire:model="carrier" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" >
                    <option disabled selected>Select</option>
                    <option value="Att">AT&T</option>
                    <option value="Sprint">Sprint</option>
                    <option value="Verizon">Verizon</option>
                    <option value="Tmobile">T-mobile</option>
                    <option value="other">Other</option>

                </select>
            </div>
            <div class="mt-4">
                <x-jet-label for="w2" value="{{ __('W2') }}" />
                <x-jet-input name="w2" class="block mt-1 w-full" wire:model="w2" type="file" name="w2" :value="old('w2')"  />
            </div>
            <div class="mt-4">
                <x-jet-label for="tax_g" value="{{ __('1099-G') }}" />
                <x-jet-input name="tax_g" wire:model="tax_g" class="block mt-1 w-full" type="file" name="tax_g" :value="old('tax_g')"/>
            </div>
            <div class="mt-4">
                <x-jet-label for="utility_bill" value="{{ __('Utility Bill') }}" />
                <x-jet-input name="utility_bill" wire:model="utility_bill" class="block mt-1 w-full" type="file" name="utility_bill" :value="old('utility_bill')"  />
            </div>
            <div class="mt-4">
                <x-jet-label for="snn" value="{{ __('SSN Card (Stored Securely)') }}" />
                <x-jet-input name="snn" wire:model="snn" class="block mt-1 w-full" type="file" name="snn" :value="old('snn')"  />
            </div>
            <div class="mt-4">
                <x-jet-label for="tax_k" value="{{ __('1099-K (Cash App, Zelle, Venmo, or Paypal)') }}" />
                <x-jet-input name="tax_k" wire:model="tax_k" class="block mt-1 w-full" type="file" name="tax_k" :value="old('tax_k')"  />
            </div>
            <div class="mt-4">
                <x-jet-label for="etc" value="{{ __('Report Card, Progress Report, or Medical Record') }}" />
                <x-jet-input name="etc" wire:model="etc" class="block mt-1 w-full" type="file" name="etc" :value="old('etc')"  />
            </div>
        </div>
        @endif
        @if($currentStep == 3)
        <div id="accroute">
            <div class="mt-4">
                <x-jet-label for="acc_num" value="{{ __('Bank Account Number') }}" />
                <x-jet-input name="acc_num" wire:model="acc_num" class="block mt-1 w-full" type="text" name="acc_num" :value="old('acc_num')"/>
            </div>
            <div class="mt-4">
                <x-jet-label for="rout_num" value="{{ __('Bank Routing Number') }}" />
                <x-jet-input name="rout_num" wire:model="rout_num" class="block mt-1 w-full" type="text" name="rout_num" :value="old('rout_num')"/>
            </div>
        </div>
        @endif
        <div class="mt-4 flex justify-center">
            <div class="mt-8 mb-4">
                    <x-jet-button class="ml-4" type="submit" wire:click="save">
                        {{ __('Save') }}
                    </x-jet-button>
                @if($currentStep == 2 || $currentStep == 3)
                    <x-jet-button class="ml-4" wire:click="back">
                        {{ __('Previous') }}
                    </x-jet-button>
                @endif
                @if($currentStep == 1 || $currentStep == 2)
                    <x-jet-button wire:click="next" class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        {{ __('Next') }}
                    </x-jet-button>
                @endif
                @if($currentStep == 3)
                    <x-jet-button class="ml-4" wire:click="finish" type="submit">
                        {{ __('Finish') }}
                    </x-jet-button>
                @endif
            </div>
        </div>
        @endif
        </form>
        
        
    
</div>



