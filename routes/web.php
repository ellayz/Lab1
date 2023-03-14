<?php

use App\Http\Controllers\MainPageController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[MainPageController::class, 'SendData'])->name('toindex');
Route::get('1',[MainPageController::class, 'SendData1'])->name('toindex');
Route::post('getstarted', [MainPageController::class, 'SendData2']);
Route::get('admin',[MainPageController::class, 'Admins'])->name('Page.admin');
Route::get('updated/{id}',[MainPageController::class, 'ToUpdate'])->name('CRUDS.update');
Route::post('updates1/{id}', [MainPageController::class, 'Updating']);
Route::delete('delete/{id}', [MainPageController::class, 'delete']);


