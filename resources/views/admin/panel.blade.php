@extends('admin.layout.admin')
@section('admin-content')
<div class="p-5">
<div class="flex flex-wrap -mx-2">
    <div class="w-full lg:w-2/4 px-2">
        <article>
            <h2 class="fancy">Statistiques</h2>
            <table>
                <tr>
                    <td>Nombre de membres</td>
                    <td class="fit">{{ $membersCount }}</td>
                </tr>
                <tr>
                    <td>Nombre de ventes</td>
                    <td class="fit">{{ $saleCount }}</td>
                </tr>
                <tr>
                    <td>Ventes sur les 7 derniers jours</td>
                    <td class="fit">{{ $sale7Days }}</td>
                </tr>
                <tr>
                    <td>Revenus totaux</td>
                    <td class="fit">{{ number_format($totalGain, 2, ',', ' ') }}€</td>
                </tr>
                <tr>
                    <td>Revenus des 7 derniers jours</td>
                    <td class="fit">{{ $totalGain7Days }}€</td>
                </tr>
            </table>
        </article>
    </div>
    <div class="w-full lg:w-2/4 px-2">
        <article>
            <h2 class="fancy">Derniers achats</h2>
            <table>
                @foreach ($bills as $bill)
                <tr>
                    <td>Facture de {{ $bill->user->name }} {{ $bill->user->lastname }}</td>
                    <td class="fit">{{ number_format($bill->total, 2, ',', ' ') }}€</td>
                    <td class="fit">
                        <a href="{{ route('profile.bill', ['id' => $bill->id]) }}">
                        <button><i class="fas fa-download"></i></button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>
        </article>
    </div>
</div>
</div>
@endsection