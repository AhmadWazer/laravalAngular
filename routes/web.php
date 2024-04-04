<?php

//use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AjaxController;
//use App\Http\Controllers\AngularJSController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\AngulerJs;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
//Route::get('/logout', [LoginController::class,'logout'])->name('logout');
Route::get('/form/view',[FormController::class,'index'])->name('form.view');
Route::get('/form/create',[FormController::class,'create'])->name('form.create');
Route::post('/form/save',[FormController::class,'save'])->name('form.save');
Route::get('/form/edit{id}',[FormController::class,'edit'])->name('form.edit');
Route::post('/form/update{id}',[FormController::class,'update'])->name('form.update');
Route::post('/form/delete{id}',[FormController::class,'delete'])->name('form.delete');
Route::get('/test',[FormController::class,'test'])->name('test');
Route::get('/form/pageview{id}',[FormController::class,'pageview'])->name('form.pageview');
Route::get('/form/sale{id}',[FormController::class,'sale']);
Route::post('/form/sale',[FormController::class,'saleStore'])->name('sale.Store');
Route::get('/form/additem',[FormController::class,'additem']);
Route::post('/form/additem',[FormController::class,'store'])->name('item.store');
Route::get('/form/showSales{id}',[FormController::class,'showSales'])->name('item.showSale');
Route::get('/form/testing',[FormController::class,'testing']);

Route::get('/ajax/ajaxform', [AjaxController::class,'ajaxform']);
Route::get('/ajax/user-list', [AjaxController::class,'user_list']);
Route::get('/ajax/ajaxeditform{id}',[AjaxController::class,'ajaxedit']);
Route::get('/ajax/user-data{id}',[AjaxController::class,'user_data']);
Route::post('/ajax/updated{id}',[AjaxController::class,'update'])->name('ajax.update');
Route::get('/ajax/viewdata{id}',[AjaxController::class,'index'])->name('ajax.view');
Route::get('/ajax/user-dataview{id}',[AjaxController::class,'data_view']);

//Route::any('show',[AngulerJs::class,'shows']);

