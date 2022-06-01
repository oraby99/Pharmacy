<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;

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

Route::get('/', function () {
    return view('welcome');
});
//===========================================================

//========================================================

// Route::get('/empolyee/{user}/edit', [EmployeeController::class , 'edit']);
// Route::put('/empolyee/{user}', [EmployeeController::class , 'update']);
//    $data['user_id'] = Auth::user()->id;

//========================================================
// Route::get('/search',[ProductController::class ,'search']);
Route::get('/home',[HomeController::class ,'index']);
//================================================================================
Route::get('/products',[ProductController::class ,'index']);
Route::get('/products/create', [ProductController::class , 'create']);
Route::post('/products/store', [ProductController::class , 'store']);
Route::get('/products/{product}', [ProductController::class , 'show']);
Route::get('/products/{product}/edit', [ProductController::class , 'edit']);
Route::put('/products/{product}', [ProductController::class , 'update']);
Route::delete('/products/{product}', [ProductController::class , 'destroy']);
Route::get('/search1',[ProductController::class ,'search']);
//====================================================================================
//========================================================
Route::get('/sales',[SaleController::class ,'index']);
Route::get('/sales/create', [SaleController::class , 'create']);
Route::post('/sales/store', [SaleController::class , 'store']);
Route::get('/sales/{sale}', [SaleController::class , 'show']);
Route::get('/sales/{sale}/edit', [SaleController::class , 'edit']);
Route::put('/sales/{sale}', [SaleController::class , 'update']);
Route::delete('/sales/{sale}', [SaleController::class , 'destroy']);
Route::get('/search2',[SaleController::class ,'search']);
//====================================================================================
Route::get('/clients',[ClientController::class ,'index']);
Route::get('/clients/create', [ClientController::class , 'create']);
Route::post('/clients/store', [ClientController::class , 'store']);
Route::get('/clients/{client}', [ClientController::class , 'show']);
Route::get('/clients/{client}/edit', [ClientController::class , 'edit']);
Route::put('/clients/{client}', [ClientController::class , 'update']);
Route::delete('/clients/{client}', [ClientController::class , 'destroy']);
Route::get('/search3',[ClientController::class ,'search']);

Route::get('/login', [AuthController::class ,'loginform']);
Route::post('/login', [AuthController::class ,'login']);
Route::get('/logout', [AuthController::class ,'logout']);

Route::middleware(['auth','super-admin'])->group(function()
{
    Route::get('/register', [AuthController::class ,'reisterform']);
    Route::post('/register', [AuthController::class ,'register']);
    //========================================================
    Route::get('/manager',[ManagerController::class ,'index']);
    Route::get('/empolyee',[EmployeeController::class ,'index']);
});
Route::get('/empolyee/{user}', [EmployeeController::class , 'show']);
Route::delete('/empolyee/{user}', [EmployeeController::class , 'destroy']);
Route::get('/search4',[EmployeeController::class ,'search']);
Route::get('/report',[ReportController::class ,'index']);







            

