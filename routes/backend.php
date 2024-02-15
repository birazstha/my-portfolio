<?php

use App\Http\Controllers\System\Category\CategoryController;
use App\Http\Controllers\System\Config\ConfigController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\System\Dashboard\DashboardController;
use App\Http\Controllers\System\Module\ModuleController;
use App\Http\Controllers\System\Permission\PermissionController;
use App\Http\Controllers\System\Role\RoleController;
use App\Http\Controllers\System\User\UserController;

Route::group(['namespace' => 'System', 'prefix' => 'system', 'middleware' => ['systemAuth', 'CheckRoleAndPermission']], function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('home.index');

    // Category
    Route::resource('/categories', CategoryController::class);
    Route::get('/categories/change-status/{id}', [CategoryController::class, 'changeStatus']);

    Route::resource('/configs', ConfigController::class);
    Route::resource('/users', UserController::class);
    Route::resource('/roles', RoleController::class);
    Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::resource('/permissions', PermissionController::class);
    Route::post('/change-password', [UserController::class, 'changePassword'])->name('changePassword');
    Route::resource('/modules', ModuleController::class);
});
