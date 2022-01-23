@extends('layout.guest')

@section('content')
    <div class="h-full w-full flex flex-col justify-center items-center">
        <x-forms.auth-form :action="route('login')" type="login"></x-forms.auth-form>
    </div>
@endsection()
