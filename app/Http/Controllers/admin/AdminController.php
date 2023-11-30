<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin;
use App\Models\product_list;
use App\Models\user_list;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function adminNavbar()
    {
        return view('admin.index');
    }
    //user section
    public function userList()
    {
        $userList = DB::table('user_lists')
            ->select('*')
            ->get();
        return view('admin.data.user_lists', compact('userList'));
    }
    public function userUpdateDisplay($id)
    {
        $userList = user_list::findOrFail($id);
        return view('admin.data.user_update', compact('userList'));
    }
    public function userUpdateData(Request $req)
    {
        $req->validate([
            'email' => 'required|unique:user_lists|email',
            'address' => 'required|string|max:255'
        ]);
        user_list::findOrFail($req->id)->update([
            'email' => $req->email,
            'address' => $req->address
        ]);
        return redirect()->route('user.list');
    }
    public function userDelete($id)
    {
        user_list::findOrFail($id)->delete();
        return redirect()->route('user.list');
    }
    //end of User Section


    public function userOrders()
    {
        $userOrder = DB::table('user_order')
        ->select('*')
        ->get();
        return view('admin.data.user_orders',compact('userOrder'));
    }

    //Product section
    public function userProducts()
    {
        $adminList = DB::table('product_lists')
            ->select('*')
            ->get();
        return view('admin.data.product_lists', compact('adminList'));
    }
    public function productUpdateDisplay($id)
    {
        $productDisplay = product_list::findOrFail($id);
        return view('admin.data.update_product', compact('productDisplay'));
    }
    public function productUpdate(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_description' => 'required|string|max:255',
            'product_price' => 'required|numeric',
            'product_quantity' => 'required|numeric',
        ]);
        //can i create sql query but this is a shortcut
        product_list::findOrFail($request->id)->update([
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_quantity' => $request->product_quantity,
            'product_description' => $request->product_description,
        ]);
        return redirect()->route('user.products');
    }
    public function productDelete(Request $request)
    {
        product_list::findOrFail($request->id)->delete();
        return redirect()->route('user.products');
    }
    public function addProductRoute()
    {
        return view('admin.data.add_product');
    }
    public function addProducts(Request $req)
    {
        $req->validate([
            'product_name' => 'required|string|max:250',
            'product_description' => 'required|string|max:250',
            'product_price' => 'required|numeric',
            'product_quantity' => 'required|numeric'
        ]);
        product_list::create([
            'product_name' => $req->product_name,
            'product_description' =>  $req->product_description,
            'product_price' =>  $req->product_price,
            'product_quantity' =>  $req->product_quantity,
        ]);
        return redirect()->route('user.products');

    }
    //End of product section

    //Admin Section
    public function adminList()
    {
        $adminDataList = DB::table('admins')
            ->select('*')
            ->get();
        return view('admin.data.admins', compact('adminDataList'));
    }
    public function addAdminDisplay()
    {
        return view('admin.data.add_admin');
    }
    public function adminAdd(Request $req)
    {
        admin::create([
            'username' => $req->username,
            'email' => $req->email,
            'password' => bcrypt($req->password),
            'type' => 'admin'
            //  'password' => Hash::make($req->password)
        ]);
        return redirect()->route('admin.lists');
    }
    public function adminUpdateDisplay($id)
    {
        $adminData = admin::findOrFail($id);
        return view('admin.data.update_admin', compact('adminData'));
    }
    public function adminUpdate(Request $req)
    {
        $req->validate([
            'username' => 'required|string|max:15',
            'email' => 'required|email',
            'password' => 'required|max:12'
        ]);
        admin::findOrFail($req->id)->update([
            'username' => $req->username,
            'email' => $req->email,
            'password' => $req->password,
        ]);
        return redirect()->route('admin.lists');
    }
    public function adminDelete($id)
    {
        admin::findOrFail($id)->delete();
        return redirect()->route('admin.lists');
    }
   public function adminLogout(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('user.login.page');
   }
}
