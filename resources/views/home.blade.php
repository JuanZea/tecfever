@extends('layout.guest')

@section('content')
    <h1>{{ auth()->user() }}</h1>
    <logout-button action="{{ route('logout') }}">@csrf</logout-button>
@endsection()
