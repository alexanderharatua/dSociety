<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use Socialite;
use Auth;
use Exception;

class GoogleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $providers = [
        'facebook','google'
    ];

    public function redirectToGoogle($driver)
    {
        return Socialite::driver($driver)->redirect();
    }
      
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback($driver)
    {
        try {
    
            $user = Socialite::driver($driver)->user();
     
            $finduser = User::where('provider_id', $user->id)->first();
     
            if($finduser){
     
                Auth::login($finduser);
    
                return redirect('/home');
     
            }else{
                if($finduser->getEmail()){
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'provider' => $driver,
                    'provider_id'=> $user->id,
                    'access_token'=> $user->token,
                    'password' => encrypt('admin12345')
                ]);

                }else{
                    echo "login menggunakan sosmed lain";
                }
    
                Auth::login($newUser);
     
                return redirect('/home');
                // dd($newUser);
            }
    
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    private function isProviderAllowed($driver)
    {
        return in_array($driver, $this->providers) && config()->has("services.{$driver}");
    }

}
