@extends('layout.auth')

@section('content')
    <h1 class="text-6xl text-gray-700 ">{{ auth()->user()->name }}</h1>
    <h1 class="text-6xl text-gray-700 ">{{ auth()->user()->email }}</h1>
@endsection()
