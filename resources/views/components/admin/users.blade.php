<article>
<table>
    <thead>
        <tr>
            <th class="fit-wrap">Nom complet</th>
            <th class="fit hidden xl:table-cell">Solde</th>
            <th class="fit">Actions</th>
        </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <td class="fit-wrap">{{$user->name}} {{$user->lastname}}</td>
        <td class="fit hidden xl:table-cell">{{ number_format($user->money, 2, ',', ' ') }}€</td>
        <td class="fit">
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
        </td>
      </tr>
      @endforeach
    </tbody>
</table>
{{ $users->links() }}
</article>