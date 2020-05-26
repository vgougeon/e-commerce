<article>
<table>
    <thead>
        <tr>
            <th>Nom complet</th>
            <th>Solde</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
          <td>{{$user->name}} {{$user->lastname}}</td>
          <td>{{ number_format($user->money, 2, ',', ' ') }}€</td>
          <td>
          <div class="flex">
              <a href="{{route('users.edit', ['user' => $user->id])}}">
                  <button><i class="fas fa-pen"></i></button>
              </a>
              <form method="POST" action="{{route('users.destroy', ['user' => $user->id])}}">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="ml-2">
                      <i class="fas fa-trash"></i>
                  </button>
              </form>
          </div>
      </tr>
      @endforeach
    </tbody>
</table>
</article>