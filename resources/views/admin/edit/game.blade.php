@extends('admin.layout.admin')
@section('admin-content')
<form class="p-5" method="POST" action="{{route('games.update', ['game' => $game->id])}}">
@method('PUT')
@csrf
<div class="flex flex-wrap -mx-2">
    <div class="w-full lg:w-1/5 px-2">
        <article>
            <div class="px-2 pb-2 pt-2">
            <input class="mt-0 mb-2" type="text" name="getter" id="getter" placeHolder="Nom du jeu"/>
                <button class="w-full" onclick="get(); return false;">Récupérer !</button>
            </div>
        </article>
        <article class="p-2">
            <img src="https://dummyimage.com/300x420/333/fff.jpg"class="cover"/>
        </article>
    </div>
    <div class="w-full lg:w-4/5 px-2">
    <article class="p-5 relative banner-top">
    <img src="https://dummyimage.com/1000x130/333/fff.jpg" class="banner"/>
    <h2 class="p-0">Créer un jeu</h2>
    <label for="name">Nom</label>
    <input type="text" name="name" id="name" placeHolder="Nom" value="{{$game->name}}" />
    <label for="description">Description</label>
    <input type="text" name="description" id="description" placeHolder="Description" value="{{$game->description}}"/>
    <div class="flex w-100 -mx-2">
    <div class="flex-grow px-2">
        <label for="cover">Cover</label>
        <input type="text" name="cover" id="cover" placeHolder="URL Cover" value="{{$game->cover}}"/>
    </div>
    <div class="flex-grow px-2">
        <label for="banner">Bannière</label>
        <input type="text" name="banner" id="banner" placeHolder="URL Bannière" value="{{$game->banner}}"/>
    </div>
    </div>
    <label for="release_date">Date de sortie</label>
    <input type="date" name="release_date" id="release_date" placeHolder="Date de sortie" value="{{$game->release_date}}"/>
    <label for="stock">Stock</label>
    <input type="text" name="stock" id="stock" placeHolder="Stock" value="{{$game->stock}}"/>
    <label for="price">Prix (€)</label>
    <input type="text" name="price" id="price" placeHolder="Prix" value="{{$game->price}}"/>
    <button type="submit">Enregistrer</button>
    </article>
</div>
</form>
<script>
async function get(){
    let game = document.querySelector('#getter').value;
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
        document.querySelector('#name').value = res.attributes.name;
        document.querySelector('#description').value = res.attributes.summary;
        document.querySelector('#cover').value = '//images.igdb.com/igdb/image/upload/t_cover_big/' + res.relations.cover.image_id + '.jpg';
        const max = res.relations.screenshots.reduce((prev, current) => (prev.width > current.width) ? prev : current)
        document.querySelector('#banner').value = '//images.igdb.com/igdb/image/upload/t_screenshot_big/' + max.image_id + '.jpg';
        const date = res.relations.release_dates[res.relations.release_dates.length - 1]
        document.querySelector('#release_date').value = new Date(date.date * 1000).toJSON().slice(0,10)
        updateForm();
    }
    console.log(res)
    return false
}
function updateForm() {
    document.querySelector('.cover').setAttribute('src', document.querySelector('#cover').value)
    document.querySelector('.banner').setAttribute('src', document.querySelector('#banner').value)
}
document.querySelector('#cover').addEventListener('change', updateForm)
document.querySelector('#banner').addEventListener('change', updateForm)
updateForm()
</script>
@endsection