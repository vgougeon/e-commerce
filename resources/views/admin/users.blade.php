@extends('admin.layout.admin')
@section('admin-content')
<x-admin.users :users="$users"/>
@endsection
