<c-input id="email" type="email" label="Email" label-color="text-white" placeholder="example@email.com"
         error="@error('email'){{$message}}@enderror" old="{{ old('email') }}"></c-input>
<c-input id="password" type="password" label="Password" label-color="text-white"
         error="@error('password'){{$message}}@enderror"></c-input>
