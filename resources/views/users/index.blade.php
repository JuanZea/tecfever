@extends('layout.auth')

@section('content')
    <h1 class="text-6xl text-gray-700 text-center mt-5">Users</h1>
    <users-table :users="{{json_encode($users['data'])}}" :current="{{ auth()->user()->id }}" :pagination="{{json_encode($users['meta'])}}"></users-table>
@endsection()
