@extends('layout.guest')

@section('content')
    <div class="h-full w-full flex flex-col justify-center items-center">
        <x-forms.auth-form :action="route('register')" type="register"></x-forms.auth-form>
    </div>
@endsection()
