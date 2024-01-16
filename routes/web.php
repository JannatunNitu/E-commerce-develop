<?php

use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\CategoryController;
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
    return view('auth.passwords.forgetPassword');
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

// BACKEND CATEGORY 
Route::prefix('/backend/categories')->name('category.')->controller(CategoryController::class)->group(
     function(){
         Route::get('/create','CreateCategory')->name('create');
         Route::post('/store','StoreCategory')->name('store');
         Route::get('/view','ViewCategory')->name('view');
         Route::get('/edit/{slug}','EditCategory')->name('edit');
         Route::put('/update/{slug}','UpdateCategory')->name('update');
         Route::get('/delete/{id}','DeleteCategory')->name('delete');
         Route::get('/force-delete/{id}','forceDelete')->name('force-delete');
         Route::get('/restore/{id}','restore')->name('restore');
         Route::get('/all/trash','AllTrash')->name('allTrash');

     }
);