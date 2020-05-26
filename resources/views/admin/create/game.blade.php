@extends('admin.layout.admin')
@section('admin-content')
<div class="p-5">
<div class="flex flex-wrap -mx-2">
    <div class="w-full lg:w-1/4 px-2">
        <article>
            <h2>Nom du jeu</h2>
            <div class="px-2 pb-2">
                <input type="text" name="name" />
                <button class="w-full">Autocomplete</button>
            </div>
        </article>
    </div>
</div>
</div>
@endsection