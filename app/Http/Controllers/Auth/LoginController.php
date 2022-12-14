<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use anlutro\LaravelSettings\Facade as Setting;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    protected $maxAttempts;
    protected $decayMinutes;

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->maxAttempts = 3;
        $this->decayMinutes = 2;
    }


    public function login(Request $request)
    {
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            toast('You are locked! Too many attempts. please try '. setting('lockout_delay') .' mintutes later.','warning');
            // flash('You are locked! Too many attempts. please try '. setting('lockout_delay') .' mintutes later.')->warning();
            return redirect()->route('login')->withInput();
            return $this->sendLockoutResponse($request);
        }

        $credentials = $request->only('email', 'password');
        if(Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']], $request->remember)){
            $userType = Auth::User()->type;
            if($userType ==1) {
                return redirect()->intended(url('/home'));
            }else{
                Auth::logout();
                toast('You are temporary blocked. please contact to admin','warning');
                return redirect()->route('login')->withInput();
            }
        }
        else {
            $this->incrementLoginAttempts($request);
            toast('Incorrect username or password. Please try again','error');
            // flash('Incorrect username or password. Please try again')->error();
            return redirect()->route('login')->withInput();
        }
    }


}
