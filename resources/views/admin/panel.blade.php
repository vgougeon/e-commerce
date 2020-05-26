@extends('admin.layout.admin')
@section('admin-content')
<div class="p-5">
<div class="flex flex-wrap -mx-2">
    <div class="w-full lg:w-2/4 px-2">
    <x-admin.users :users="$users"/>
    </div>
    <div class="w-full lg:w-2/4 px-2">
    <x-admin.games :games="$games"/>
    <x-admin.games-panel />
    </div>
</div>
</div>
@endsection