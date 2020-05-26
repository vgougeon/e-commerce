@extends('admin.layout.admin')
@section('admin-content')
<div class="p-5">
<div class="flex flex-wrap -mx-2">
    <div class="w-full lg:w-1/4 px-2">
      <form class="form-material" method="POST" action="{{route('users.update', ['user' => $user->id])}}">
          @method('PUT')
          @csrf
          <div class="grix xs1">
              <div class="form-field">
                  <input type="text" id="name" name="name" class="form-control" value="{{$user->name}}" />
                  <label for="name">Prénom</label>
              </div>
              <div class="form-field">
                  <input type="text" id="lastname" name="lastname" class="form-control" value="{{$user->lastname}}" />
                  <label for="lastname">Nom</label>
              </div>
              <div class="form-field">
                  <label for="money">Argent</label>
                  <textarea id="money" name="money" class="form-control">{{$user->money}}</textarea>
              </div>
          </div>
          <button type="submit" class="btn press secondary">Mettre à jour</button>
      </form>
    </div>
</div>
</div>
@endsection
