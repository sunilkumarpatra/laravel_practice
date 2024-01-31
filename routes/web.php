<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ResourceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\SingleActionController;
use App\Models\Customer;
use App\Http\Controllers\CustomerController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

// Route::get('/{name?}', function ($name = null) {
//     $data=compact('name');
//     return view('home')->with($data);
// });
// Route::get('/',[SampleController::class, 'index']);
// Route::get('/sac',SingleActionController::class);
// Route::resource('/re',ResourceController::class);
Route::get('/', function () {
    return view('index');
});
Route::get('/register',[RegistrationController::class, 'index']);
Route::post('/register',[RegistrationController::class, 'register']);

//Route::get('/customer',[CustomerController::class,'index']);
Route::get('/customer',[CustomerController::class,'index']);
Route::post('/customer/create',[CustomerController::class,'store']);
Route::get('/customer/view',[CustomerController::class,'view']);
Route::get('/customer/delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
Route::get('/customer/update/{id}',[CustomerController::class,'update'])->name('customer.update');

