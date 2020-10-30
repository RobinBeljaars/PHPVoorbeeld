<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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
    $task=ProductController::getProducts();
    return view('welcome')->withTask($task);
});

Route::get('/home',function(){
    return redirect('/');
});

Route::get('CreateProduct', function(){return view('ProductCreate');})->middleware(['auth']);
Route::post('CreateProduct',[ProductController::class, 'addProduct'])->middleware(['auth']);

Route::get('productDetails/{id}',[ProductController::class, 'details']);

Route::get('EditProduct/{id}',[ProductController::class, 'EditProductView'])->middleware(['auth']);
Route::post('EditProduct/{id}',[ProductController::class, 'EditProduct'])->middleware(['auth']);

Route::get('deleteProduct/{id}',[ProductController::class, 'removeProduct'])->middleware(['auth']);

Route::get('login', [AuthController::class, 'login'])->middleware(['guest']);
Route::post('login',[AuthController::class,'authenticate']);

Route::get('logout',[AuthController::class,"logout"])->middleware(['auth']);

Route::get('register', [AuthController::class,"showregistration"])->middleware(['guest']);
Route::post('register', [AuthController::class,"register"]);
