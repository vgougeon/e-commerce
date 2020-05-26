@extends('admin.layout.admin')
@section('admin-content')
<div class="p-5">
<div class="flex flex-wrap -mx-2">
    <div class="w-full lg:w-full px-2">
    <article class="p-5">
      <form class="form-material" method="POST" action="{{route('users.update', ['user' => $user->id])}}">
          @method('PUT')
          @csrf
          <div class="grix xs1">
              <div class="form-field">
                <label for="name">Prénom</label>
                  <input type="text" id="name" name="name" value="{{$user->name}}" />
                  
              </div>
              <div class="form-field">
                <label for="lastname">Nom</label>
                <input type="text" id="lastname" name="lastname" value="{{$user->lastname}}" />
                  
              </div>
              <div class="form-field">
                <label for="money">Argent</label>
                <input type="text" id="money" name="money" value="{{$user->money}}" />
              </div>
          </div>
          <button type="submit" class="btn press secondary">Mettre à jour</button>
      </form>
      </article>
    </div>
</div>
</div>
@endsection
