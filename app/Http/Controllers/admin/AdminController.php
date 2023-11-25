<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\product_list;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function adminNavbar()
    {
        return view('admin.index');
    }
    public function userList()
    {
        $userList = DB::table('user_lists')
            ->select('*')
            ->get();
        return view('admin.data.user_lists', compact('userList'));
    }
    public function userOrders()
    {
        return view('admin.data.user_orders');
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
            'product_quanity' => $request->product_quantity,
            'product_description' => $request->product_description,
        ]);
        return redirect()->route('user.products');
    }
    //End of product section
    public function adminList()
    {
        $adminDataList = DB::table('admins')
            ->select('*')
            ->get();
        return view('admin.data.admins', compact('adminDataList'));
    }
}
