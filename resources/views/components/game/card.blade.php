<div class="flex flex-col">
<a href="{{ route('game', ["id" => $game->id])}}">
<article class="game-card mb-0">
    @if($game->stock > 0)
    <div class="stock"><span>En stock</span></div>
    @else
    <div class="no-stock"><span>Rupture de stock</span></div>
    @endif
    <img src="{{ $game->cover }}" />
    <div class="light-price m-2">{{ number_format($game->price, 2, ',', ' ') }}€</div>
    <x-game.rating :game="$game" :size="'12px'"/>
</article>
</a>
<span class="text-sm opacity-75 text-center">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $game->release_date)->format('F Y')}}</span>
</div>
