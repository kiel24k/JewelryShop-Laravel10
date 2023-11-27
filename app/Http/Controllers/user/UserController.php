<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\user_list;

class UserController extends Controller
{
    public function guest(){
        return view('user.content.guest');
    }
    public function userSection()
    {
        return view('user.content.section');
    }
    public function userLoginPage()
    {
        return view('user.content.login');
    }
    public function userLoginAuthentication(Request $request)
    {

        $cred = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if (Auth::guard('user_list')->attempt($cred)) {
            $request->session()->regenerate();
            return redirect()->route('user.section');
        }

        return back()->withErrors([
            'email' => 'The provided email do not match our records'
        ])->onlyInput('email');
    }
    //Login section
    public function userSignUpSection()
    {
        return view('user.content.signup_admin');
    }
    public function userAdminLogin(Request $req)
    {
        $adminCred = $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt($adminCred)) {

            return redirect()->route('admin.lists');
        }
        return back()->withErrors([
            'email' => 'The provided email do not match '
        ])->onlyInput('email');
    }
    public function userLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('guest');
    }
}
