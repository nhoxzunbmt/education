<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use LaravelCaptcha\Facades\Captcha;
use App\Http\Controllers\Front\FrontBaseController;
use App\Http\Requests\Front\LoginRequest;

class LoginController extends FrontBaseController
{
    use AuthenticatesUsers;

    public function getLogin()
    {
        return view('auth.login', [
            'captcha' => Captcha::html()
        ]);
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
            return redirect('login')->with('error', trans('lang.message.locked'));
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

            return redirect('login')
                ->with('error', trans('lang.message.err_login'));
        }

        $user = auth()->getLastAttempted();

        if ($user->confirmed) {
            if (!$lockedOut) {
                $this->incrementLoginAttempts($request);
            }

            auth()->login($user, $request->has('remember'));
            $user->last_login();

            return redirect('/');
        }

        return redirect('login')
            ->with('error', trans('lang.message.locked'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect('login')->with('success', trans('lang.logouted'));
    }
}
