<article>
    <h2>Liste des jeux</h2>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th class="fit">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
                <tr>
                    <td>{{ $game->name }}</td>
                    <td>{{ $game->price }}</td>
                    <td>
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
</article>