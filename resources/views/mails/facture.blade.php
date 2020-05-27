<h1>Playzone</h1>
<h2>Facture</h2>
<table>
  <thead>
    <tr>
      <th>Nom du jeu</th>
      <th class="fit">Clé d'activation</th>
      <th class="fit">Prix</th>
    </tr>
  </thead>
  <tbody>
    @foreach($codes as $item)
      <tr>
        <td>{{ $item["name"] }}</td>
        <td class="fit">{{ $item["key"] }}</td>
        <td class="fit">{{ $item["price"] }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
<h3>Total : {{ $total }}</h3>