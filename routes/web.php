<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\AdminProfileChangeController;
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
    });

    Route::middleware(['auth', 'verified', 'rolecheck',  'admin'])->group(function(){
        Route::controller(AdminProfileChangeController::class)->group(function(){
            
            Route::get('/profile/change', 'profile_change')->name('profile_change');
            Route::post('/update/profile/change/{user_id}', 'update_profile_change')->name('update_profile_change');
        });

    });

