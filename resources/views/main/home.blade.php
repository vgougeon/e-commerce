@extends('layouts.template')

@section('content')
<div class="bg-header jumbotron">
    <div class="bg-container">
        <img class="bg-trend" src="{{ $trending->banner }}" />
    </div>
</div>

<main>
<div class="container pt-5 ">
    <div class="game-wrapper mb-5 pb-4 px-3 fadeout">
        <img src="{{ $trending->cover }}" class="game-cover"/>
        <div class="flex flex-col h-100 pt-5 pl-5">
        <span class="leading-none">A la une</span>
        <a href="{{ route('game', ["id" => $trending->id])}}"><h2 class="text-shadow m-0 p-0 text-2xl leading-none">{{ $trending->name }}</h2></a>
        <div class="flex -mx-1 mt-2">
            <div class="game-category mx-1">RPG</div>
            <div class="game-category mx-1">Aventure</div>
            <div class="game-category mx-1">Réflexion</div>
            <div class="game-category mx-1">Stratégie</div>
        </div>
        <div class="price mt-2">{{ number_format($trending->price, 2, ',', ' ') }}€</div>

        {{-- <p class="pl-5">{{ $trending->description }}</p> --}}
        </div>
    </div>
    
    @if($search ?? '' !== '')
    <h2 class="fancy"><i class="fas fa-gamepad mr-3"></i>Recherche pour <span class="soft-color font-normal">{{ $search }}</span></h2>
    @else
    <h2 class="fancy"><i class="fas fa-gamepad mr-3"></i> Dernières sorties</h2>
    @endif
    <div class="grid-custom">
    @foreach ($games as $game)
        <x-game.card :game="$game"/>
    @endforeach
    </div>
    {{ $games->links() }}
</div>

</main>

@endsection
