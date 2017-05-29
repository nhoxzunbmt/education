<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Front\LoginRequest;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);

        // parent::__construct();
    }

    /**
     * Handle a login request to the application
     *
     * @param  \App\Http\Requests\Front\LoginRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        if ($lockedOut = $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return response()->json([
                'error' => trans('lang.message.locked')
            ], 401);
        }

        $logValue = $request->input('log');
        $logAccess = filter_var($logValue, FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile';

        $credentials = [
            $logAccess  => $logValue,
            'password'  => $request->input('password')
        ];

        if (!auth()->validate($credentials)) {
            if (!$lockedOut) {
                $this->incrementLoginAttempts($request);
            }

            return response()->json([
                'error' => trans('lang.message.err_login')
            ], 401);
        }

        $user = auth()->getLastAttempted();

        if ($user->confirmed) {
            if (!$lockedOut) {
                $this->incrementLoginAttempts($request);
            }

            auth()->login($user, $request->has('remember'));
            $user->last_login();

            return redirect('/')->with('success', 'Login success');
        }

        return response()->json([
            'error' => trans('lang.message.locked')
        ], 401);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect('login')->with('success', trans('lang.logouted'));
    }
}
