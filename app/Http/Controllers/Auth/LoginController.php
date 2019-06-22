<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        //$this->middleware('guest:employee')->except('logout');
    }


    public function showEmployeeLogin()
    {
        return view('auth.login',['url'=>'employee']);
    }

    public function employeeLogin(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6',
        ]);

        $email=$request->email;
        $password=$request->password;

        if(Auth::guard('employee')->attempt(['email' => $email, 'password' => $password], $request->get('remember')))
        {
            return redirect()->intended('/Employee');
        }
        return redirect()->back()->withInput($request->only(['email','remeber']));

    }

    public function employeeLogout()
    {
        Auth::guard('employee')->logout();
        return redirect("/");
    }

}
