@extends('admin.layout.admin')
@section('admin-content')
<div class="p-5">
<div class="flex flex-wrap -mx-2">
    <div class="w-full px-2">
    <x-admin.users :users="$users"/>
    </div>
</div>
</div>

@endsection
