  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customers') }}
  </h2>

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
