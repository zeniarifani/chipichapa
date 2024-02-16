<?php
use App\Http\Controllers\CustomAuthController;
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
//     return view('dashboard');
// });
Route::get('/',[CustomAuthController::class,'landingpage'])->name('landingpage');
Route::post('/adminpassword',[CustomAuthController::class,'adminpassword'])->name('adminpassword');

Route::get('/dashboard',[CustomAuthController::class,'showAll'])->name('dashboard.showAll');
Route::get('/addpage',[CustomAuthController::class,'addpage'])->name('addpage');
Route::post('/addemployee',[CustomAuthController::class,'addemployee'])->name('addemployee');
Route::delete('/delete/{id}',[CustomAuthController::class,'delete'])->name('delete');
Route::get('/edit/{id}',[CustomAuthController::class,'edit'])->name('edit');
Route::patch('/update/{id}',[CustomAuthController::class,'update'])->name('update');
