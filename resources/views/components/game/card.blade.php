<div class="flex flex-col">
<a href="{{ route('game', ["id" => $game->id])}}">
<article class="game-card mb-0">
    <img src="{{ $game->cover }}" />
    <div class="light-price m-2">{{ number_format($game->price, 2, ',', ' ') }}€</div>
</article>
</a>
<span class="text-sm opacity-75 text-center">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $game->release_date)->format('F Y')}}</span>
</div>
