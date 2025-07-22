<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Redirect;

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

    use AuthenticatesUsers {
        logout as performLogout;
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function redirectTo(){

        $user = Auth::user();
        if($user->hasRole('Admin'))
        {
            return 'admin/dashboard';
        }
        else
        {
            return '/';
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            if($request->ajax())
                return response()->json( $this->sendLockoutResponse($request));
            else
                return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            if($request->ajax())
                return response()->json( $this->sendLoginResponse($request) );
            else
                return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);
        if($request->ajax())
            return response()->json($this->sendFailedLoginResponse($request));
        else
            return $this->sendFailedLoginResponse($request);
    }

    public function logout(Request $request)
    {
        $user = Auth::user();
        if($user->hasRole('Admin'))
        {
            $redirect = 'admin';
        }
        else{
            $redirect = '/';
        }
        
        $this->performLogout($request);

        return redirect($redirect);
    }
}
