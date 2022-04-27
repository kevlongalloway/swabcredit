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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
@endpush
@push('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
                    var i = 1;
                    $('#additem .btn-default').on('click', function(e) {
                    i++;
                    var el = $('.table-additems tbody tr:eq(0)').clone();
                    $(el).find('option:selected').removeAttr('selected');
                    $(el).find(':input').each(function() {
                        $(this).removeAttr('value');
                    });
                    //while cloning hide other input
                    $(el).find('.inputother').css({
                        'display': 'none'
                    });

                    $(this).closest('tr').before('<tr id="row' + i + '" >' + $(el).html() + '</tr>');
                    });
                    $(document).on('click', '#additem .btn-danger', function(e) {
                    if ($('.table-additems tbody tr').length == 2) {
                        var el = $('.table-additems tbody tr:eq(0)');
                        $(el).find('select:eq(0)').val($(el).find('select:eq(0) option:first').val());
                        $(el).find('select:eq(1)').val($(el).find('select:eq(1) option:first').val());
                        $(el).find('input:eq(0)').val('');
                        e.preventDefault();
                    } else {
                        $(this).closest('tr').remove();
                    }
                    });
                    //use this because other slect-box are dynmically created
                    $(document).on('change', '.serviceitem', function(e) {
                    if ($(this).val() == 'other') {
                    //find this ->closest trs-> get input box show
                        $(this).closest("tr").find('.inputother').css({
                        'display': 'block'
                        });
                    } else {
                        $(this).closest("tr").find('.inputother').css({
                        'display': 'none'
                        });
                    }
                    });
                </script>
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
                {{ __('Services') }}
            </h2>
            <hr>
            <div class="flex justify-between">
            <div class="container-fluid">
      <div id="additem">
        <div class="d-flex justify-content-center align-items-center">
          <table class="table table-striped table-condensed table-additems">
            <thead>
              <tr>
                <th class="align-middle border-0">Service</th>
                <th class="align-middle border-0">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr id="row1">
                <td>
                  <select name="items[]" class="form-control serviceitem">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                  </select>

                  <input type="text" class='form-control inputother' style="display: none;" name="other[]">

                </td>
                <td class="action">
                  <button type="submit" class="btn btn-danger ">
                        Delete
                    </button>
                    <button type="submit" class="btn btn-success ">
                        Save
                    </button>            
                </td>
              </tr>
              <tr>
                <td colspan="4">
                  <button type="button" class="btn btn-default btn-xs">+ Add New Item</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
            </div>

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
                
                
