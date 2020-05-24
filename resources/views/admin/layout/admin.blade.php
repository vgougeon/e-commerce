@extends('layouts.template')

@section('content')
<div class="bg-header">
</div>
<main class="panel">
    <x-admin.nav />
    <div class="panel-content">
    @yield('admin-content')
    </div>
</main>

@endsection
