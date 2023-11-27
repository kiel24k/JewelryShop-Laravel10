<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\user\UserController;
use App\Http\Middleware\userList;
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

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/', [UserController::class, 'guest'])->name('guest');

route::controller(AdminController::class)->group(function () {
    route::get('user/list', 'userList')->name('user.list');
    route::get('admin/navbar', 'adminNavbar');
    route::get('admin/order/user', 'userOrders')->name('user.orders');
    route::get('admin/user/product', 'userProducts')->name('user.products');
    route::get('admin/user/admin', 'adminList')->name('admin.lists');
    route::get('product/update/{id}', 'productUpdateDisplay')->name('product.update.display');
    route::post('product/updated', 'productUpdate')->name('product.update');
    route::get('admin.product.delete/{id}', 'productDelete')->name('product.delete');
    route::get('admin/add/product', 'addProductRoute')->name('add.product');
    route::post('admin/add/product', 'addProducts')->name('add.products');
    route::get('user/update/display/{id}', 'userUpdateDisplay')->name('user.update.display');
    route::post('user/update/data', 'userUpdateData')->name('update.data');
    route::get('user/delete/{id}', 'userDelete')->name('user.delete');
    route::get('admin/add/section', 'addAdminDisplay')->name('add.admin');
    route::post('admin/add', 'adminAdd')->name('admin.add');
    route::get('admin/update/display/{id}', 'adminUpdateDisplay')->name('admin.update.display');
    route::post('admin/update/data', 'adminUpdate')->name('admin.update');
    route::get('admin/delete/{id}', 'adminDelete')->name('admin.delete');
});

route::controller(UserController::class)->group(function () {
    route::get('user/login/page', 'userLoginPage')->name('user.login.page');
    route::post('user/login', 'userLoginAuthentication')->name('user.login');
    route::get('user/signup/page', 'userSignupSection')->name('user.signup.page');
    route::post('user/signup', 'userAdminLogin')->name('user.admin.login');
    //middleware use for auth user only with data like fetch and handling auth data
    Route::middleware([userList::class])->group (function() {
        route::get('user/index/section', 'userSection')->name('user.section');
        route::get('user/logout', 'userLogout')->name('user.logout');
    });
});



