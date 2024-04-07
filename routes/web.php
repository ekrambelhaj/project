<?php

use App\Http\Controllers\MangmentuserController;
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

Route::get('user', function () {
    return view('admin.user mangment.index');
});

Route::get('user',[MangmentuserController::class,'index'])->name('user.index');
Route::get('user/create',[MangmentuserController::class,'create'])->name('user.create');
Route::post('user/store',[MangmentuserController::class,'store'])->name('user.store');
Route::get('user/edit/{id}',[MangmentuserController::class,'edit'])->name('user.edit');
Route::get('user/delete/{id}',[MangmentuserController::class,'delete'])->name('user.delete');
Route::post('user/update',[MangmentuserController::class,'update'])->name('user.update');
Route::get('user/view{id}',[MangmentuserController::class,'view'])->name('user.view');
Route::get('user/show',[MangmentuserController::class,'show'])->name('user.show');
