@extends('layouts.template')

@section('content')
<div class="bg-header jumbotron">
    <div class="bg-container">
        <img class="bg-trend" src="{{ $trending->banner }}" />
    </div>
</div>

<main>
<div class="container pt-5 ">
    <div class="game-wrapper mb-5 pb-4 px-3 pt-4 fadeout">
        <img src="https://api.adorable.io/avatars/256/{{ $user->name }}" class="user-avatar" />
        <div class="flex flex-col h-100 pt-5 pl-5">
        <span class="leading-none">@if($user->is_admin) Administrateur @else Membre @endif</span>
        <h2 class="text-shadow m-0 p-0 text-2xl leading-none">{{ $user->name }} {{ $user->lastname }}</h2></a>
        @if(Auth::user()->id == $user->id)
        <a class="mt-3" href="{{ route('profile.edit', ['id' => $user->id])}}" /><button ><i class="fas fa-edit mr-2"></i>Modifier mon profil</button></a>
        @endif
        {{-- <p class="pl-5">{{ $trending->description }}</p> --}}
        </div>
    </div>
    
    <div class="flex flex-wrap -mx-2 pt-2">
        <div class="w-full xl:w-1/3 px-2">
            @if(Auth::user()->id == $user->id)
            <article>
                <div class="flex justify-between items-center">
                <h2 class="fancy mb-0">Solde : <span class="soft-color font-light">{{ number_format($user->money, 2, ',', ' ') }}€</span></h2>
                <a href="{{ route('profile.edit', ['id' => $user->id])}}" class="mr-3">Ajouter des fonds</a>
                </div>
            </article>
            @endif
            <article>
                <div class="flex justify-between items-center">
                <h2 class="fancy mb-0">Mes informations</h2>
                <a href="{{ route('profile.edit', ['id' => $user->id])}}" class="mr-3">Modifier</a>
                </div>
            </article>
        </div>
        <div class="w-full xl:w-2/3 px-2">
            @if(Auth::user()->id == $user->id)
            <article>
                <h2 class="fancy">Mes factures</h2>
            </article>
            @endif
        </div>
    </div>
    
</div>
    
</main>

@endsection
