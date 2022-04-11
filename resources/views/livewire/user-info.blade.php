<div>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
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

