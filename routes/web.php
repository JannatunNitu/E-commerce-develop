<?php

use App\Http\Controllers\Backend\AdminProfileController;
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

Auth::routes();

Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'adminDashboard'])->name('adminDashboard');
Route::get('/forgot',function(){
    return view('auth.passwords.forgetPasseord');
});


// ADMINPROFILECONTROLLER
Route::prefix('/admin')->name('admin.')->controller(AdminProfileController::class)->group(
       function(){
        Route::get('/','ShowProfile')->name('show.profile');
        Route::put('/UpdateProfile','UpdateProfile')->name('update.profile');
        Route::put('/UpdateImage','UpdateProfileImage')->name('update.profile.image');
        Route::get('/showPassword','ShowPassword')->name('show.password');
        Route::put('/UpdatePassword','UpdatePassword')->name('update.password');
       }
);

// Route::prefix('/Profile')->name('admin.')->controller(AdminProfileController::class)->group(
//     function(){
//         Route::get('/','ShowProfile')->name('profile');
//         // Route::put('/Update','UpdateProfile')->name('profile.update');
//         // Route::put('/Password/Update','UpdateAdminPassword')->name('profile.password.update');
//     }
// );

// Route::put('/Update',[AdminProfileController::class,'UpdateProfile'])->name('profile.update');