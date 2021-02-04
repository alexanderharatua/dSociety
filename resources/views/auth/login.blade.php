<x-guest-layout>
   
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

   

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="signup-form">
                <div class="card">  
                    <x-jet-validation-errors class="mb-8"/>
                    {{-- <p style="text-align: right">Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></p> --}}
                    <h2>Masuk ke akun-mu </h2>
                    <hr>      	
                    <div class="form-group">
                        <label for="number">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="" required="required">
                    </div>
                        <div class="form-group">
                            <label for="name">Sandi</label>
                            <input type="password" class="form-control" name="password" required="required">
                        </div>
                      
                    {{-- <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div> --}}
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger">Masuk</button>
                    </div>
                    <div>
                        <hr data-content="Atau" class="hr-text">
                    </div>
                </form>
                <div class="form-group">
                    <a href="{{ route('social.auth', 'google') }}"><button type="button" id="customBtn"><i class="fa fa-google">  Lanjutkan dengan Google</i></button></a>
                </div>

                <div class="form-group">
                    <a href="{{ route('social.auth', 'facebook') }}"><button type="button" id="customBtn"><i class="fa fa-facebook">  Lanjutkan dengan Facebook</i></button></a> 
                </div>

                 <p style="text-align: center">Belum punya akun? <a href="{{ route('register') }}">Buat yuk!</a></p>
        </div>
            {{-- <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div> --}}

            {{-- <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> --}}

            {{-- <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button> --}}

             {{-- <a href="{{ route('social.auth', 'google') }}" style="margin-top: 0px !important;background: green;color: #ffffff;padding: 5px;border-radius:7px;" class="ml-2 btn-google">
                      <strong>Login With Google</strong>
                    </a> 

                    <a href="{{ route('social.auth', 'facebook') }}" style="margin-top: 0px !important;background: blue;color: #ffffff;padding: 5px;border-radius:7px;" class="ml-2 btn-google">
                        <strong>Login With Facebook</strong>
                      </a>  --}}

            </div>
        </form>
   
</x-guest-layout>
