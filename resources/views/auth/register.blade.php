<x-guest-layout>
    
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
                <div class="signup-form">
                    <div class="card">  

                        <p style="text-align: right">Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></p>
                        <h2>Buat Akun semud. </h2>
                        <hr>
                        <div class="form-group">
                            <div class="row">
                                
                                <div class="col-xs-6">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="name" placeholder="" required="required">
                                </div>
                                <div class="col-xs-6">
                                    <label for="number">Nomor Handphone</label>
                                    <input type="number" class="form-control" name="no_hp" placeholder="" required="required">
                                </div>
                            </div>        	
                        </div>
                        <div class="form-group">
                            <label for="number">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="" required="required">
                        </div>

                        <div class="row">
                                
                            <div class="col-xs-6">
                                <label for="name">Sandi</label>
                                <input type="password" class="form-control" name="password" placeholder="" required="required">
                            </div>
                            <div class="col-xs-6">
                                <label for="number">Konfirmasi Sandi</label>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="" required="required">
                            </div>
                        </div>  
                          
                        <div class="form-group">
                            <label class="checkbox-inline"><input type="checkbox" required="required"> by creating an account you agree to semud's conditions of use and  &amp; Privacy notice</label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">Buat Akun</button>
                        </div>
                    <div>
                        <hr data-content="Atau" class="hr-text">
                    </div>
                    </form>
                    <div class="form-group">
                        <a href="{{ route('social.auth', 'google') }}"><button type="button" id="customBtn"><i class="fa fa-google">  Lanjutkan dengan Google</i></button></a>
                    </div>
                    
                    {{-- <input type="button" id="customBtn" class="fa fa-link" value="Lanjutkan dengan Google"> --}}
                    <div class="form-group">
                      <a href="{{ route('social.auth', 'facebook') }}"><button type="button" id="customBtn"><i class="fa fa-facebook">  Lanjutkan dengan Facebook</i></button></a> 
                    </div>
            </div>


            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif
        </form>
</x-guest-layout>
