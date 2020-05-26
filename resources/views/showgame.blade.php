@extends('layouts.template')

@section('content')
{{$game->banner_img}}
{{$game->cover_img}}
{{$game->name}} <br>
{{$game->price}} <br>
{{$game->description}}<br>
{{$game->note}}

@endsection
