@extends('admin.layout.admin')
@section('admin-content')
<div class="p-5">
<div class="flex flex-wrap -mx-2">
    <div class="w-full lg:w-1/5 px-2">
        <article>
            <div class="px-2 pb-2 pt-2">
                <button class="w-full" onclick="get()">Récupérer !</button>
            </div>
        </article>
        <article class="p-2">
            <input class="mt-0" type="text" name="name" id="name" placeHolder="Nom du jeu"/>
            <input class="mt-0" type="text" name="cover" id="cover" placeHolder="Cover du jeu"/>
            <img class="cover"/>
        </article>
    </div>
</div>
</div>
<script>
async function get(){
    let game = document.querySelector('#name').value;
    let url = 'http://e-commerce.test/api/game';
    let body = {
        name: game
    }
    let response = await fetch(url, {
        method: 'post',
        body: JSON.stringify(body)
    });
    let res = await response.json();
    if (res !== null) {
        console.log(res)
        document.querySelector('#cover').value = res.relations.cover.url;
        updateForm();
    }
    console.log(res)
}
function updateForm() {
    document.querySelector('.cover').setAttribute('src', document.querySelector('#cover').value)
}
document.querySelector('#cover').addEventListener('change', updateForm)
</script>
@endsection