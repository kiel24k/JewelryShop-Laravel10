<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin;
use App\Models\product_list;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\user_list;
use App\Models\user_order;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function guest()
    {
        return view('user.content.guest');
    }
    public function userSection()
    {
        $productData = DB::table('product_lists')
            ->select('*')
            ->get();
        return view('user.content.section', compact('productData'));
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
    public function userOrderCheck($id)
    {
        $order = product_list::findOrFail($id);
        return view('user.content.order_check', compact('order'));
    }
    public function placeOrder(Request $request)
    {
        $pquant = $request->product_quantity;
        $quant = $request->quantity;
        $allprod =  $pquant - $quant;

        user_order::create([
            'order_id' => $request->order_id,
            'email' => $request->email,
            'orders' => $request->orders,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'status' => 'pending',
        ]);
        product_list::findOrFail($request->product_id)->update([
            'product_quantity' => $allprod
        ]);

        return redirect()->route('user.section');
    }
}
