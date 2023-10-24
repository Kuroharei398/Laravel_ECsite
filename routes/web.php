<?php

use App\Http\Controllers\admin\AdminCategoriesController;
use App\Http\Controllers\admin\AdminProductDetailController;
use App\Http\Controllers\admin\AdminProductsController;
use App\Http\Controllers\admin\AdminTopController;
use App\Http\Controllers\admin\AdminOrdersController;
use App\Http\Controllers\admin\AdminUsersController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\users\RegisterController;
use App\Http\Controllers\ThanksController;
use App\Http\Controllers\users\LoginController;
use Illuminate\Support\Facades\Route;
use App\Livewire\ShippingCostSelector;


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
    return view('top');
});

//トップページ遷移
Route::get('/top' , [TopController::class, 'view_top'])->name('top');

//ユーザー登録画面
Route::get('/regist', [RegisterController::class, 'view_regist'])->name('regist');

//ユーザー登録処理
Route::post('/registing_user', [RegisterController::class, 'register'])->name('regist.user');

//ログイン画面
Route::get('/login', [LoginController::class, 'view_login'])->name('login');

//ログイン処理
Route::post('/registing_Login', [LoginController::class, 'login'])->name('login.user');

//ユーザーログアウト処理
Route::post('/registing_Logout', [LoginController::class, 'logout'])->name('regist.logout');

//商品画面遷移
Route::get('/products' , [ProductsController::class , 'view_products'])->name('products');

//商品詳細画面遷移
Route::get('/products/product_detail/{id}' , [ProductDetailController::class , 'view_productdetail'])->name('product_detail');

//商品個数の選択
Route::post('/products/product_detail/{id}/quantity' , [ProductDetailController::class , 'quantity'])->name('products_detail.quentity');

//カート画面遷移
Route::get('/cart' , [CartController::class , 'view_cart'])->name('cart');

//個数更新
Route::post('/cart/quantity_update/{id}', [CartController::class, 'quantity_Update'])->name('cart.quantity_Update');

//カート内商品データの削除
Route::delete('/cart/carts_deleate/{id}', [CartController::class , 'cart_Deleate'])->name('cart.cart_Deleate');

//支払い情報入力画面遷移
Route::get('/payment' , [PaymentController::class , 'view_payment'])->name('payment');

Route::get('/payment/shipping-cost-selector', ShippingCostSelector::class);

//支払い情報登録
Route::post('/payment/regist' , [PaymentController::class , 'payment_regist'])->name('payment_regist');

//購入完了画面遷移
Route::get('/thanks' , [ThanksController::class , 'view_thanks'])->name('thanks');

//購入履歴画面遷移
Route::get('/orders' , [OrdersController::class , 'view_orders'])->name('orders');


//ログインしているユーザーのみ見せたいときに使用
Route::middleware('auth')->group(function (){
    //管理側トップページ遷移
    Route::get('/admin_top' , [AdminTopController::class, 'view_admintop'])->name('admin.top');

    //管理側商品画面遷移
    Route::get('/admin_products' , [AdminProductsController::class , 'view_adminproducts'])->name('admin.products');

    //商品登録
    Route::post('/admin_products_add', [AdminProductsController::class , 'addition'])->name('products.addition');

    //商品検索
    Route::get('/admin_products/products_search', [AdminProductsController::class , 'search'])->name('products.search');

    //管理側商品詳細画面遷移
    Route::get('/admin_products/admin_product_detail/{id}' , [AdminProductDetailController::class , 'view_adminproductdetail'])->name('admin.product_detail');

    //商品データの更新
    Route::post('/admin_products/product_detail/update/{id}', [AdminProductDetailController::class , 'update'])->name('products_detail.update');

    //商品データの削除
    Route::delete('/admin_products/product_detail/deleate/{id}', [AdminProductDetailController::class , 'deleate'])->name('products_detail.deleate');

    //カテゴリー管理画面遷移
    Route::get('/admin_categories' , [AdminCategoriesController::class , 'view_admincategories'])->name('admin.categories');

     //カテゴリー追加
    Route::post('/admin_categories/category_Addition', [AdminCategoriesController::class, 'category_Addition'])->name('admin_categories.category_Addition');

    //注文管理画面遷移
    Route::get('/admin_orders' , [AdminOrdersController::class , 'view_adminorders'])->name('admin.orders');

    //注文ステータス更新
    Route::post('/admin_orders/orderStatus_Update/{id}', [AdminOrdersController::class, 'orderStatus_Update'])->name('admin_orders.orderStatus_Update');

    //カテゴリー管理画面遷移
    Route::get('/admin_categories' , [AdminCategoriesController::class , 'view_admincategories'])->name('admin.categories');

    //ユーザー管理画面遷移
    Route::get('/admin_users' , [AdminUsersController::class , 'view_adminUsers'])->name('admin.users');

    //注文ステータス更新
    Route::post('/admin_users/authority_Update/{id}', [AdminUsersController::class, 'authority_Update'])->name('admin_users.authority_Update');
});