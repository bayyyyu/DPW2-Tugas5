<?php
use App\Http\Controllers\AdminControllers\HomeController;
use App\Http\Controllers\AdminControllers\ProdukController;
use App\Http\Controllers\AdminControllers\UserController;
use App\Http\Controllers\AdminControllers\AuthController;
use App\Http\Controllers\WebControllers\indexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//tampilan depan
Route::get('/', function () {
    return view('welcome');
});

route::get('register', function(){
    return view('register');
});
Route::get('detail_products', [indexController::class, 'showDetailProduk']);
Route::get('products', [indexController::class, 'showProduk']);
Route::get('index', [indexController::class, 'showBeranda']);
Route::get('category', [indexController::class, 'showKategori']);


//admin
Route::get('AdminBeranda', [HomeController::class, 'showBeranda']);
Route::get('AdminKategori', [HomeController::class, 'showKategori']);
Route::get('AdminPromo', [HomeController::class, 'showPromo']);
Route::get('AdminPelanggan', [HomeController::class, 'showPelanggan']);
Route::get('AdminSuplier', [HomeController::class, 'showSuplier']);

//Admin Produk
Route::get('AdminProduk', [ProdukController::class, 'index']);
Route::get('AdminProduk/create', [ProdukController::class, 'create']);
Route::post('AdminProduk', [ProdukController::class, 'store']);
Route::get('AdminProduk/{produk}', [ProdukController::class, 'show']);
Route::get('AdminProduk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('AdminProduk/{produk}', [ProdukController::class, 'update']);
Route::delete('AdminProduk/{produk}', [ProdukController::class, 'destroy']);

//Admin User
Route::get('Adminuser', [UserController::class, 'index']);
Route::get('Adminuser/create', [UserController::class, 'create']);
Route::post('Adminuser', [UserController::class, 'store']);
Route::get('Adminuser/{user}', [UserController::class, 'show']);
Route::get('Adminuser/{user}/edit', [UserController::class, 'edit']);
Route::put('Adminuser/{user}', [UserController::class, 'update']);
Route::delete('Adminuser/{user}', [UserController::class, 'destroy']);

//Login
Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

//register