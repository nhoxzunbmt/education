<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Session\LoginRequest;
use Session;

class SessionController extends Controller
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
    }

    public function getLogin()
    {
        return view('back.session.login');
    }

    public function login(LoginRequest $request)
    {
        if ($lockedOut = $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return redirect('backend/login')->with('error', trans('ongame.locked'));
        }

        $credentials = [
            'email'  => $request->input('email'),
            'password'  => $request->input('password')
        ];

        if (!auth()->validate($credentials)) {
            if (!$lockedOut) {
                $this->incrementLoginAttempts($request);
            }

            return redirect('backend/login')
                ->with('error', trans('ongame.err_login'));
        }

        $user = auth()->getLastAttempted();

        if ($user->confirmed) {
            if (!$lockedOut) {
                $this->incrementLoginAttempts($request);
            }

            auth()->login($user, $request->has('remember'));
            // Update Last Login
            $user->last_login();

            return redirect('/backend');
        }

        return redirect('backend/login')
            ->with('error', trans('ongame.locked'));
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('back/login')->with('success', trans('ongame.logouted'));
    }
}
