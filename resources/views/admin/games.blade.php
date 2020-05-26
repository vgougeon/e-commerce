@extends('admin.layout.admin')
@section('admin-content')
<div class="p-5">
<div class="flex flex-wrap -mx-2">
    <div class="w-full lg:w-1/4 px-2">
    <x-admin.games-panel />
    </div>
    <div class="w-full lg:w-3/4 px-2">
    <x-admin.games :games="$games"/>
    </div>
</div>
</div>
@endsection