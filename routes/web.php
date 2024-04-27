<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\AdminProfileChangeController;
use App\Http\Controllers\admin\AdminAdvanceSettingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


    Route::controller(DashboardController::class)->group(function(){
        Route::get('/admin/dashboard', 'admin_dashboard')->middleware(['auth', 'verified', 'rolecheck',  'admin'])->name('admin_dashboard');
        Route::get('/manager/dashboard', 'manager_dashboard')->middleware(['auth', 'verified', 'manager' ])->name('manager_dashboard');
        Route::get('/dashboard', 'dashboard')->middleware(['auth', 'verified', 'user'])->name('dashboard');

        Route::get('/', 'index')->name('index');
        Route::get('/logout', 'logout')->middleware(['auth', 'verified'])->name('logout');
        
        Route::get('admin/signup/verify/{email}/{token}',  'signup_verify')->name('signup_verify');

        Route::get('/admin/forget_password', 'admin_forget_password')->name('admin_forget_password');

        Route::post('/admin/forget_password/sub', 'admin_forget_password_sub')->name('admin_forget_password_sub');

        Route::get('/admin/reset_password/{token}/{email}', 'admin_reset_password')->name('admin_reset_password');

        Route::post('/admin/reset_password/sub', 'admin_reset_password_sub')->name('admin_reset_password_sub');

    });

    Route::middleware(['auth', 'verified', 'rolecheck',  'admin'])->group(function(){
        Route::controller(AdminProfileChangeController::class)->group(function(){

            Route::get('/profile/change', 'profile_change')->name('profile_change');
            Route::post('/update/profile/change/{user_id}', 'update_profile_change')->name('update_profile_change');
        });

    });

    Route::middleware('auth')->group(function(){
        Route::controller(AdminAdvanceSettingController::class)->group(function(){
            route::get('/advance/setting', 'advance_setting')->name('advance_setting');
            route::post('/update/advance/setting/{up_id}', 'update_advance_setting')->name('update_advance_setting');
        });

    });

