<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminNavbar(){
        return view('admin.index');
    }
    public function userList(){
        return view('admin.data.user_lists');
    }
    public function userOrders(){
        return view('admin.data.user_orders');
    }
    public function userProducts(){
        return view('admin.data.product_lists');
    }
    public function adminList(){
        return view('admin.data.admins');
    }
}
