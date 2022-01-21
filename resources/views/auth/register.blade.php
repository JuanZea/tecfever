@extends('layout.guest')

@section('content')
    <a class="absolute" href="{{ route('welcome') }}">Welcome</a>
    <div class="h-full w-full flex flex-col justify-center items-center">
        <x-auth-form :action="route('register')" type="register"></x-auth-form>
        @error('email')
            <div> {{ $message }}</div>
        @enderror
        @error('password')
            <div> {{ $message }}</div>
        @enderror
    </div>
@endsection()
