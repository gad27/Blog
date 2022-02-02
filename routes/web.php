<?php

use App\Http\Controllers\Dashboard\CategoriesController;
use App\Http\Controllers\Blog\BlogController;
use App\Models\category;
use App\Models\blogs;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/home', function () {
   return view('home');
})->middleware('auth');

Route::get('/dashboard/category',[CategoriesController::class,'index'])->name('dashboard.category')->middleware('auth');
Route::post('/dashboard/category',[CategoriesController::class,'createcategory'])->name('dashboroard.category')->middleware('auth');
Route::get('/delete-category/{id}',[CategoriesController::class,'deletecategory']);

Route::get('/dashboard/blog',[BlogController::class,'index'])->name('dashboard.blog')->middleware('auth');
Route::post('/dashboard/createblog',[BlogController::class,'createblog'])->name('createblog')->middleware('auth');
Route::POST('/dashboard/blog',[BlogController::class,'files'])->name('blog1')->middleware('auth');
//Route::get('/dashboard/blog',[BlogController::class,'index'])->name('dashboard.blog')->middleware('auth');
//Route::post('/dashboard/blog',[BlogController::class,'createblog'])->name('dashboard.blog')->middleware('auth');
