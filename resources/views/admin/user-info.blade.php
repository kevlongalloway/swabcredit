<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $user->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg my-4">
                <livewire:user-info :user="$user" />
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg my-4">
            <h2 class="font-semibold text-lg text-grey flex justify-left leading-7 p-3">
                {{ __('Address') }}
            </h2>
            <hr>
            <p class="p-3">
                {{ $user->line1 }}, {{ $user->line2 }}<br>
                {{ $user->city }}, {{ $user->state }} {{ $user->postal_code }}<br>
            </p>

            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg my-4">
            <h2 class="font-semibold text-lg text-grey flex justify-left leading-7 p-3">
                {{ __('Filing Status') }}
            </h2>
            <hr>
            <p class="p-3">
                {{ $user->filing_status }}
            </p>

            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg my-4">
            <h2 class="font-semibold text-lg text-grey flex justify-left leading-7 p-3">
                {{ __('Account Number') }}
            </h2>
            <hr>
            <p class="p-3">
                {{ $user->acc_num }}
            </p>

            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg my-4">
            <h2 class="font-semibold text-lg text-grey flex justify-left leading-7 p-3">
                {{ __('Routing Number') }}
            </h2>
            <hr>
            <p class="p-3">
                {{ $user->rout_num }}
            </p>

            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg my-4">
            <h2 class="font-semibold text-lg text-grey flex justify-left leading-7 p-3">
                {{ __('Carrier') }}
            </h2>
            <hr>
            <p class="p-3">
                {{ $user->carrier }}
            </p>

            </div>


            <style>
                .container {
                padding: 40px;
                margin: 2em auto 2em auto;
                position: relative;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                }

                .item {
                background: #f2f2f2;
                transition : all 0.3s ease-in-out;
                width: 32%;
                padding-bottom: 18%;
                margin-bottom: 2%;
                }

                .item:hover {
                transition: all 0.5s ease;
                background: #d9d9d9;
                }
                </style>
                <div class="container rounded bg-white shadow-xl">
                    <div class="item rounded" href="">
                        <h2 class="font-semibold text-lg text-grey flex justify-center text-center align-middle leading-7 p-3">
                            {{ __('id front') }}
                        </h2>
                    </div>
                    <div class="item rounded" href=""></div>
                    <div class="item rounded" href=""></div>
                    <div class="item rounded" href=""></div>
                    <div class="item rounded" href=""></div>
                    <div class="item rounded" href=""> </div>
                    <div class="item rounded" href=""></div>

                </div>


        </div>
    </div>
</x-app-layout>