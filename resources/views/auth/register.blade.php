@extends('layout.guest')

@section('content')
    <div class="h-full w-full flex flex-col justify-center items-center">
        <x-auth-form :action="route('register')" type="register"></x-auth-form>
    </div>
@endsection()
