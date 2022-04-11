@push('styles')
<style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th{
      font-weight: bold;
      font-size: 1.2rem;
    }

    th, td {
      text-align: left;
      padding: 12px;
    }

    tr:nth-child(even) {background-color: #f2f2f2;}
    </style>
@endpush
<div>
      <h2 class="font-semibold text-xl text-white flex justify-center leading-7 py-3" style='background:#6776f7;'>
            {{ __('Customers') }}
      </h2>
    <div class="px-4 py-4">
      <x-jet-input class="" class="form-control" name="query" placeholder="Search..." type="text" wire:model.debounce.500ms="query" />
    </div>
      <table class="table-auto">
        <thead>
          <tr>
            <th>Name</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td><a href="{{ url('/users/'.$user->id.'/') }}">{{ $user->name }}</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>  
      <div class="px-4 py-4">
      {{$users->onEachSide(1)->links()}}
    </div>
</div>
