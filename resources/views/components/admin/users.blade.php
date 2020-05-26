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
          <td>{{$user->money}}</td>
          <td>{{$user->lastname}}</td>
          <td>
          <div class="flex">
              <a href="{{route('users.edit', ['user' => $user->id])}}" class="btn circle secondary">
                  <i class="fas fa-pen"></i>
              </a>
              <form method="POST" action="{{route('users.destroy', ['user' => $user->id])}}">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="ml-2 btn circle red dark-1">
                      <i class="fas fa-trash"></i>
                  </button>
              </form>
          </div>
      </tr>
      @endforeach
    </tbody>
</table>
