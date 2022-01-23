<c-input id="name" type="text" label="Name" label-color="text-white"
         error="@error('name'){{$message}}@enderror" old="{{ old('name') }}"></c-input>
<x-partials.login-inputs></x-partials.login-inputs>
<c-input id="password_confirmation" type="password" label="Password Confirm"
         label-color="text-white"></c-input>
