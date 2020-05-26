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
                    <td class="fit"><button>Delete</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</article>