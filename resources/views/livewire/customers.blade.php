<div>
<h2 class="font-semibold text-xl text-white flex justify-center leading-7 py-3" style='background:#6776f7;'>
            {{ __('Customers') }}
  </h2>
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

tr:nth-child(odd) {background-color: #f2f2f2;}
</style>
<form class="form-inline" method="get" action="{{ url('/dashboard/search') }}">
  <input class="" class="form-control"  placeholder="Search..." type="text">
</form>

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
</div>