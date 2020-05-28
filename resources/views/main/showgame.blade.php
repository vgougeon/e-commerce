@extends('layouts.template')

@section('content')
<div class="bg-header jumbotron">
    <div class="bg-container">
        <img class="bg-trend" src="{{ $game->banner }}" />
    </div>
</div>
<main>
<div class="container pt-5 ">
    <div class="game-wrapper mb-5 pb-4 px-3 fadeout">
        <img src="{{ $game->cover }}" class="game-cover"/>
        <div class="flex flex-col h-100 pt-5 pl-5">
        <span class="leading-none soft-color text-shadow">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $game->release_date)->format('F Y')}}</span>
        <a href="{{ route('game', ["id" => $game->id])}}"><h2 class="text-shadow m-0 p-0 text-2xl leading-none">{{ $game->name }}</h2></a>
        <div class="flex -mx-1 mt-2">
            <div class="game-category mx-1">RPG</div>
            <div class="game-category mx-1">Aventure</div>
            <div class="game-category mx-1">Réflexion</div>
            <div class="game-category mx-1">Stratégie</div>
        </div>
        <div class="flex mt-2">
        <div class="price no-border">{{ number_format($game->price, 2, ',', ' ') }}€</div>
        <form method="POST" action="{{ route('cart.add', ['id' => $game->id]) }}">
            @method('POST')
            @csrf
            <button class="fancy no-border"><i class="fas fa-shopping-basket mr-2"></i>Ajouter au panier</button>
        </form>
        </div>
        <div class="flex my-3 mx-1">
            <x-game.rating :game="$game" :size="'20px'"/>
        </div>
        </div>
    </div>
    <div class="flex flex-wrap -mx-2 pt-2">
        <div class="w-full xl:w-2/3 px-2">
        <article class="p-5" >
            <h2 class="fancy">Description</h2>
            <p class="px-3 soft-color">{{ $game->description }}</p>
        </article>
        </div>
        <div class="w-full xl:w-1/3 px-2">
        <article class="relative">
            @if($game->stock > 0)
            <div class="stock"></div>
            @else
            <div class="no-stock"></div>
            @endif
            <h2 class="fancy">Stock : <span class="soft-color text-sm font-light">{{ $game->stock }} exemplaires</span></h3>
        </article>
        <article class="relative">
            <h3>Avis : <span class="soft-color text-sm font-light">{{ sizeof($game->comments) }} avis</span></h3>
            @foreach ($game->comments as $comment)
                <div class="flex flex-col px-3 pb-2">
                    <div class="flex items-center justify-between">
                        <span class="font-semibold">{{ $comment->user->name }} {{ $comment->user->lastname }}</span>
                    </div>
                    <span class="text-xs opacity-50 leading-none">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $comment->created_at)->format('d F Y')}}</span>
                    <div class="flex mt-1">
                        <p class="text-sm soft-color">{{ $comment->review }}</p>
                    </div>
                </div>
                
            @endforeach
            @if(sizeof($game->users) > 0)
            <form class="mx-2 pb-2" method="POST" action="{{route('comment.store')}}">
            @method('POST')
            @csrf
            <input type="hidden" value="{{ $game->id }}" name="game_id" />
            <textarea name="comment" placeholder="Ajoutez ou actualisez un avis sur cet achat !"></textarea>
            <x-game.star />
            <button class="ml-auto block"><i class="fas fa-paper-plane mr-2"></i>GO !</button>
            </form>
            @endif
        </article>
        </div>
    </div>
</div>
</main>
@endsection
