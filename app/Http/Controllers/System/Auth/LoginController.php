<?php

namespace App\Http\Controllers\System\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $this->validator($request);
        if (Auth::guard('web')->attempt($request->only('username', 'password'), $request->remember)) {
            return redirect()->route('home.index');
        }
        return $this->loginFailed();
    }

    private function validator(Request $request)
    {
        $rules = [
            'username' => 'required|max:191',
            'password' => 'required'
        ];
        $request->validate($rules);
    }

    private function loginFailed()
    {
        return redirect()
            ->back()
            ->withInput()
            ->withErrors(['username' => 'These credentials do not match our records.']);
    }

    public function logout(Request $request)
    {

        if (Auth::guard('staffs')->check()) {
            Auth::guard('staffs')->logout();
        }
        Auth::guard('web')->logout();
        return redirect()
            ->route('login.form')
            ->with('status', 'Admin has been logged out!');
    }
}
