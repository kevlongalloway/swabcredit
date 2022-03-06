<div>
    <form id="upForm" method="POST" action="{{ route('upload.store') }}">
        @csrf
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
        @if($currentStep == 1)
            <div id="ids">
                <div class="mt-4">
                    <x-jet-label for="id" value="{{ __('ID (Front)') }}" />
                    <x-jet-input id="id" class="block mt-1 w-full" type="file" name="id" :value="old('id')"   />
                </div>
                <div class="mt-4">
                    <x-jet-label for="idb" value="{{ __('ID (Back)') }}" />
                    <x-jet-input id="idb" class="block mt-1 w-full" type="file" name="idb" :value="old('idb')"  />
                </div>
            </div>
        @endif
        @if($currentStep == 2)
        <div id="accroute">
            <div class="mt-4">
                <x-jet-label for="acc_num" value="{{ __('Bank Account Number') }}" />
                <x-jet-input id="acc_num" class="block mt-1 w-full" type="text" name="acc_num" :value="old('acc_num')"/>
            </div>
            <div class="mt-4">
                <x-jet-label for="rout_num" value="{{ __('Bank Routing Number') }}" />
                <x-jet-input id="rout_num" class="block mt-1 w-full" type="text" name="rout_num" :value="old('rout_num')"/>
            </div>
        </div>
        @endif
        @if($currentStep == 3)
        <div id="docs">
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
        </div>
        @endif

        </form>
        <div class="mt-4 flex justify-center">
            <div class="mt-8 mb-4">
                    <x-jet-button class="ml-4">
                        {{ __('Save') }}
                    </x-jet-button>
                @if($currentStep == 2 || $currentStep == 3)
                    <x-jet-button class="ml-4" wire:click="back">
                        {{ __('Previous') }}
                    </x-jet-button>
                @endif
                @if($currentStep == 1 || $currentStep == 2)
                    <x-jet-button class="ml-4" wire:click="next">
                        {{ __('Next') }}
                    </x-jet-button>
                @endif
                @if($currentStep == 3)
                    <x-jet-button class="ml-4">
                        {{ __('Finish') }}
                    </x-jet-button>
                @endif
            </div>
        </div>
    
</div>

@push('scripts')
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
<script>
    window.addEventListener('livewire:load', event => {
        uploadUI();
    }); 
    window.addEventListener('livewire:update', event => {
        uploadUI();
    });    

    function uploadUI () {
        // Get a reference to the file input element
        const inputElement = document.querySelectorAll('input[type="file"]');
        // Create a FilePond instance
        inputElement.forEach(function (inputE) {
           const pond = FilePond.create(inputE)
        });
    }  
</script>
@endpush
