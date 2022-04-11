@push('styles')
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(odd) {background-color: #f2f2f2;}

    .item {
    background: #f2f2f2;
    transition : all 0.3s ease-in-out;
    }

    .item:hover {
    transition: all 0.5s ease;
    background: #d9d9d9;
    }
</style>
@endpush
<div>
<table>
    <tr>
        <th>
            Name
        </th>
        <th>
            Email
        </th>
        <th>
            Phone Number
        </th>

    </tr>
    <tr>
        <td>
            {{ $user->name }}
        </td>
        <td>
            {{ $user->email }}
        </td>
        <td>
            {{ $user->phone }}
        </td>
    </tr>
</table>
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

                <div class="rounded bg-white py-6 px-6 shadow-xl grid grid-cols-3 gap-2 justify-between">
                    @if($user->hasFile('id_front_filename'))
                    <div class="item rounded w-full mt-4">
                        <a href="{{ url('/user/'. $user->id . '/download/id_front_filename') }}">
                            <h2 class="font-semibold text-lg text-grey flex justify-center text-center align-middle leading-7 p-3">
                                {{ __('ID Front') }}
                            </h2>
                        </a>
                    </div>
                    @endif
                    @if($user->hasFile('id_back_filename'))
                    <div class="item rounded w-full mt-4">
                        <a href="{{ url('/user/'. $user->id . '/download/id_back_filename') }}">
                            <h2 class="font-semibold text-lg text-grey flex justify-center text-center align-middle leading-7 p-3">
                                {{ __('ID Back') }}
                            </h2>
                        </a>
                    </div>
                    @endif
                    @if($user->hasFile('w2_filename'))
                    <div class="item rounded w-full mt-4">
                        <a href="{{ url('/user/'. $user->id . '/download/w2_filename') }}">
                            <h2 class="font-semibold text-lg text-grey flex justify-center text-center align-middle leading-7 p-3">
                                {{ __('W2') }}
                            </h2>
                        </a>
                    </div>
                    @endif
                    @if($user->hasFile('utility_bill_filename'))
                    <div class="item rounded w-full mt-4">
                        <a href="{{ url('/user/'. $user->id . '/download/utility_bill_filename') }}">
                            <h2 class="font-semibold text-lg text-grey flex justify-center text-center align-middle leading-7 p-3">
                                {{ __('Utility Bill') }}
                            </h2>
                        </a>
                    </div>
                    @endif
                    @if($user->hasFile('snn_filename'))
                    <div class="item rounded w-full mt-4">
                        <a href="{{ url('/user/'. $user->id . '/download/snn_filename') }}">
                            <h2 class="font-semibold text-lg text-grey flex justify-center text-center align-middle leading-7 p-3">
                                {{ __('SSN') }}
                            </h2>
                        </a>
                    </div>
                    @endif
                    @if($user->hasFile('tax_g_filename'))
                    <div class="item rounded w-full mt-4">
                        <a href="{{ url('/user/'. $user->id . '/download/tax_g_filename') }}">
                            <h2 class="font-semibold text-lg text-grey flex justify-center text-center align-middle leading-7 p-3">
                                {{ __('1099-G') }}
                            </h2>
                        </a>
                    </div>
                    @endif
                    @if($user->hasFile('tax_k_filename'))
                    <div class="item rounded w-full mt-4">
                        <a href="{{ url('/user/'. $user->id . '/download/tax_k_filename') }}">
                            <h2 class="font-semibold text-lg text-grey flex justify-center text-center align-middle leading-7 p-3">
                                {{ __('1099-K') }}
                            </h2>
                        </a>
                    </div>
                    @endif
                    @if($user->hasFile('etc_filename'))
                    <div class="item rounded w-full mt-4">
                        <a href="{{ url('/user/'. $user->id . '/download/etc_filename') }}">
                            <h2 class="font-semibold text-lg text-grey flex justify-center text-center align-middle leading-7 p-3">
                                {{ __('Other') }}
                            </h2>
                        </a>
                    </div>
                    @endif

                </div>
                
