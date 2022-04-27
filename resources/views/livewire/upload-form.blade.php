@push('styles')
<link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}">
<style>
                        input[type="file" i] {
                            appearance: none;
                            background-color: initial;
                            cursor: default;
                            align-items: baseline;
                            color: inherit;
                            text-overflow: ellipsis;
                            white-space: pre;
                            text-align: start !important;
                            padding: initial;
                            border: initial;
                            overflow: hidden !important;
                        }
                        input {
                            writing-mode: horizontal-tb !important;
                            font-style: ;
                            font-variant-ligatures: ;
                            font-variant-caps: ;
                            font-variant-numeric: ;
                            font-variant-east-asian: ;
                            font-weight: ;
                            font-stretch: ;
                            font-size: ;
                            font-family: ;
                            text-rendering: auto;
                            color: -internal-light-dark(black, white);
                            letter-spacing: normal;
                            word-spacing: normal;
                            line-height: normal;
                            text-transform: none;
                            text-indent: 0px;
                            text-shadow: none;
                            display: inline-block;
                            text-align: start;
                            appearance: auto;
                            -webkit-rtl-ordering: logical;
                            cursor: text;
                            background-color: -internal-light-dark(rgb(255, 255, 255), rgb(59, 59, 59));
                            margin: 0em;
                            padding: 1px 2px;
                            border-width: 2px;
                            border-style: inset;
                            border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
                            border-image: initial;
                        }
                        .fileinput{
                            -webkit-text-size-adjust: 100%;
                            tab-size: 4;
                            --bs-blue: #0d6efd;
                            --bs-indigo: #6610f2;
                            --bs-purple: #6f42c1;
                            --bs-pink: #d63384;
                            --bs-red: #dc3545;
                            --bs-orange: #fd7e14;
                            --bs-yellow: #ffc107;
                            --bs-green: #198754;
                            --bs-teal: #20c997;
                            --bs-cyan: #0dcaf0;
                            --bs-white: #fff;
                            --bs-gray: #6c757d;
                            --bs-gray-dark: #343a40;
                            --bs-gray-100: #f8f9fa;
                            --bs-gray-200: #e9ecef;
                            --bs-gray-300: #dee2e6;
                            --bs-gray-400: #ced4da;
                            --bs-gray-500: #adb5bd;
                            --bs-gray-600: #6c757d;
                            --bs-gray-700: #495057;
                            --bs-gray-800: #343a40;
                            --bs-gray-900: #212529;
                            --bs-primary: #0d6efd;
                            --bs-secondary: #6c757d;
                            --bs-success: #198754;
                            --bs-info: #0dcaf0;
                            --bs-warning: #ffc107;
                            --bs-danger: #dc3545;
                            --bs-light: #f8f9fa;
                            --bs-dark: #212529;
                            --bs-primary-rgb: 13, 110, 253;
                            --bs-secondary-rgb: 108, 117, 125;
                            --bs-success-rgb: 25, 135, 84;
                            --bs-info-rgb: 13, 202, 240;
                            --bs-warning-rgb: 255, 193, 7;
                            --bs-danger-rgb: 220, 53, 69;
                            --bs-light-rgb: 248, 249, 250;
                            --bs-dark-rgb: 33, 37, 41;
                            --bs-white-rgb: 255, 255, 255;
                            --bs-black-rgb: 0, 0, 0;
                            --bs-body-color-rgb: 33, 37, 41;
                            --bs-body-bg-rgb: 255, 255, 255;
                            --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                            --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
                            --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
                            --bs-body-font-family: var(--bs-font-sans-serif);
                            --bs-body-font-size: 1rem;
                            --bs-body-font-weight: 400;
                            --bs-body-line-height: 1.5;
                            --bs-body-color: #212529;
                            --bs-body-bg: #fff;
                            box-sizing: border-box;
                            --tw-translate-x: 0;
                            --tw-translate-y: 0;
                            --tw-rotate: 0;
                            --tw-skew-x: 0;
                            --tw-skew-y: 0;
                            --tw-scale-x: 1;
                            --tw-scale-y: 1;
                            --tw-pan-x: ;
                            --tw-pan-y: ;
                            --tw-pinch-zoom: ;
                            --tw-scroll-snap-strictness: proximity;
                            --tw-ordinal: ;
                            --tw-slashed-zero: ;
                            --tw-numeric-figure: ;
                            --tw-numeric-spacing: ;
                            --tw-numeric-fraction: ;
                            --tw-ring-inset: ;
                            --tw-ring-offset-width: 0px;
                            --tw-ring-offset-color: #fff;
                            --tw-ring-color: rgb(59 130 246 / 0.5);
                            --tw-ring-offset-shadow: 0 0 #0000;
                            --tw-ring-shadow: 0 0 #0000;
                            --tw-shadow: 0 0 #0000;
                            --tw-shadow-colored: 0 0 #0000;
                            --tw-blur: ;
                            --tw-brightness: ;
                            --tw-contrast: ;
                            --tw-grayscale: ;
                            --tw-hue-rotate: ;
                            --tw-invert: ;
                            --tw-saturate: ;
                            --tw-sepia: ;
                            --tw-drop-shadow: ;
                            --tw-backdrop-blur: ;
                            --tw-backdrop-brightness: ;
                            --tw-backdrop-contrast: ;
                            --tw-backdrop-grayscale: ;
                            --tw-backdrop-hue-rotate: ;
                            --tw-backdrop-invert: ;
                            --tw-backdrop-opacity: ;
                            --tw-backdrop-saturate: ;
                            --tw-backdrop-sepia: ;
                            font-family: inherit;
                            margin: 0;
                            display: block;
                            width: 100%;
                            border-radius: .25rem;
                            border-width: 1px;
                            border-style: solid;
                            --tw-border-opacity: 1;
                            border-color: rgb(209 213 219/var(--tw-border-opacity));
                            --tw-bg-opacity: 1;
                            background-color: rgb(255 255 255/var(--tw-bg-opacity));
                            background-clip: padding-box;
                            padding-left: .75rem;
                            padding-right: .75rem;
                            padding-top: .375rem;
                            padding-bottom: .375rem;
                            font-size: 1rem;
                            line-height: 1.5rem;
                            font-weight: 400;
                            --tw-text-opacity: 1;
                            color: rgb(55 65 81/var(--tw-text-opacity));
                            transition-property: color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;
                            transition-duration: 150ms;
                            transition-timing-function: cubic-bezier(.4,0,.2,1);
                            overflow: hidden;
                            cursor: pointer;
                        }
                    </style>
                    @endpush
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
        <div class="py-1 px-1">
            <div class="block">
                <h1 class="text-2xl cgrey text-center mb-4">{{ __('Upload Documents') }}</h1>
            </div>
            <div class="mt-4">
                <h2 class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum possimus dolor sit eaque cupiditate iusto fuga aliquid, nam modi in eum beatae nemo culpa a eius error similique! Fugit, nobis.</h2>
            </div>
            
            <div class="flex items-center justify-center mt-8 mb-2">
            <x-jet-button href="#" class="ml-4" wire:click="start">
                {{ __('Start') }}
            </x-jet-button>
                </a>
        </div>
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
                    <x-jet-label class="form-label inline-block mb-2 text-gray-700" for="idf" value="{{ __('ID (Front)') }}" />
                    <input style="padding: 0.75rem 0.375rem 0.75rem 0.375rem" class="fileinput" type="file" wire:model="idf">
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



