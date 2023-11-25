<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\user\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::controller(AdminController::class)->group(function () {
    route::get('admin/user/list', 'userList')->name('user.list');
    route::get('admin/navbar', 'adminNavbar');
    route::get('admin/order/user', 'userOrders')->name('user.orders');
    route::get('admin/user/product', 'userProducts')->name('user.products');
    route::get('admin/user/admin', 'adminList')->name('admin.lists');
    route::get('product/update/{id}','productUpdateDisplay')->name('product.update.display');
    route::post('product/updated','productUpdate')->name('product.update');
});
route::controller(UserController::class)->group(function () {
    route::get('user/index/section','userSection')->name('user.section');
});
