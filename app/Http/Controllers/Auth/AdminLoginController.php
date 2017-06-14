<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class AdminLoginController extends Controller
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

    protected $username = 'username';

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    public function showLogin()
    {
      return view('admins.auth.login');
    }
    public function login(Request $request)
    {
      // Validate Form
      //
      $this->validate($request, [
          'username' => 'required',
          'password' => 'required|min:6'
      ]);

      // Attempt login
      //
      if(Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)){
        return redirect()->intended(route('admin.dashboard'));
      }
      return redirect()->back()->withInput($request->only('username', 'remember'));
    }
    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->route('admin.login');
    }
    public function username()
    {
      return 'username';
    }
    protected function guard()
    {
        return Auth::guard();
    }
}
