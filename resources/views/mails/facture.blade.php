<h1>Customer List</h1>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cart as $item)
      <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->quantity }}</td>
        <td>{{ $item->price }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
<h3>Total : {{ $total }}</h3>