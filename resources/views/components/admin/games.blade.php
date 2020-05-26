<article>
    <h2>Liste des jeux</h2>
    <table>
        <thead>
            <tr>
                <th class="fit-wrap">Nom</th>
                <th class="fit hidden xl:table-cell">Stock</th>
                <th class="fit hidden xl:table-cell">Prix</th>
                <th class="fit">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
                <tr>
                    <td class="fit-wrap">{{ $game->name }}</td>
                    <td class="fit hidden xl:table-cell">{{ $game->stock }}</td>
                    <td class="fit hidden xl:table-cell">{{ number_format($game->price, 2, ',', ' ') }}€</td>
                    <td class="fit">
                        <div class="flex">
                            <a href="{{route('games.edit', ['game' => $game->id])}}">
                                <button><i class="fas fa-pen"></i></button>
                            </a>
                            <form method="POST" action="{{route('games.destroy', ['game' => $game->id])}}">
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
    {{ $games->links() }}
</article>