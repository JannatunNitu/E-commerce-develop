<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/',function(){
    return view('Frontend.homepage.homepage');
});
// Route::get('/backend',function(){
//     return view('Backend.backendhomepage');
// });


Auth::routes();

Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'adminDashboard'])->name('adminDashboard');
Route::get('/forgot',function(){
    return view('auth.passwords.forgetPasseord');
});
