<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;




Route::controller(FrontendController::class)->group(function(){
    Route::get('/', 'home')->name('home.page');
    Route::get('/about', 'about')->name('about.page');
});

Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/profile', 'profile')->name('admin.profile');
    Route::get('/edit', 'edit_profile')->name('edit.profile');
    Route::post('/store', 'store_profile')->name('store.profile');

    Route::get('/change_password', 'change_password')->name('change.password');
    Route::post('/update_password', 'store_password')->name('update.password');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
