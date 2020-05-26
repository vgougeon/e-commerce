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
<script>
async function get() {
    let options = 'fields name, involved_companies; search "Assassins Creed"; where version_parent = null;'
    let url = 'https://api-v3.igdb.com/search';
    let response = await fetch(url, {
        method: 'post',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json',
          'Authorization': "8dd625152e32e289e5ae07fe5c3cf22c",
          'Host': 'api-v3.igdb.com'
        }
    });
    let res = await response.json();
    console.log(res)
}
get()
</script>
@endsection