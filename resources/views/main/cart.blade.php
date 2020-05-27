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
        <h2 class="ml-5">Votre panier</h2>
    </div>
    <div class="flex flex-wrap -mx-2 pt-2 mt-10">
        <div class="w-full xl:w-1/3 px-2">
            <article>
                <div class="flex justify-between items-center">
                    <h2 class="fancy mb-0">Total : <span class="soft-color font-light">{{ number_format(Cart::getTotal(), 2, ',', ' ') }}€</span></h2>
                    <form method="POST" action="{{ route('cart.pay') }}">
                        @method('POST')
                        @csrf
                        <button class="mr-2 ml-auto block">Paiement</button>
                    </form>
                </div>
            </article>
        </div>
        <div class="w-full xl:w-2/3 px-2">
            <article>
                <div class="flex justify-between items-center">
                    <h2 class="fancy mb-0">Panier : <span class="soft-color font-light">{{ Cart::count() }} articles</span></h2>
                    <form method="POST" action="{{ route('cart.empty') }}">
                        @method('POST')
                        @csrf
                        <button class="mr-2"><i class="fas fa-shopping-basket mr-2"></i>Vider</button>
                    </form>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th class="fit-wrap">Nom</th>
                            <th class="fit">Prix</th>
                            <th class="fit">Qté</th>
                            <th class="fit"></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach (Cart::content() as $item)
                        <tr>
                            <td class="fit-wrap">{{ $item->name }}</td>
                            <td class="fit">{{ $item->price }}</td>
                            <td class="fit">
                                <form method="POST" action="{{ route('cart.setQuantity', ['id' => $item->getUniqueId()]) }}">
                                    @method('POST')
                                    @csrf
                                    <input class="quantity" name="quantity" type="number" value="{{ $item->quantity }}" />
                                    <button><i class="fas fa-check"></i></button>
                                </form>
                                
                            </td>
                            <td class="fit">
                                <form method="POST" action="{{ route('cart.remove', ['id' => $item->getUniqueId()]) }}">
                                    @method('POST')
                                    @csrf
                                    <button><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
            </article>
        </div>
    </div>
</div>

</main>

@endsection
