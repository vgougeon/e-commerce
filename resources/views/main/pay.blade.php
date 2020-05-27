@extends('layouts.template')

@section('content')
<div class="bg-header jumbotron">
    <div class="bg-container">
        <img class="bg-trend" src="{{ $trending->banner }}" />
    </div>
</div>

<main>
<div class="container pt-5 ">
    <div class="cart-wrapper fadeout pt-10 px-5 pb-10">
        <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24"><path d="M10 19.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5zm3.5-1.5c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm1.336-5l1.977-7h-16.813l2.938 7h11.898zm4.969-10l-3.432 12h-12.597l.839 2h13.239l3.474-12h1.929l.743-2h-4.195z"/></svg>
            @if($error == "no-money") 
            <div class="flex flex-col ml-5">
            <h2 class="p-0">Pas assez d'argent :(</h2>
            <a href="{{ route('profile.edit', ['id' => Auth::user()->id]) }}"><button>Ajouter des fonds</button></a>
            </div>
            @elseif($error == "no-stock")
            Stocks insuffisant
            @endif
            @if($error == null)
            <div class="flex flex-col ml-5">
                <h2 class="p-0">Succès !</h2>
            </div>
            @endif
    </div>
</div>

</main>

@endsection
