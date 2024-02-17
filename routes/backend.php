<?php


use App\Http\Controllers\System\Category\CategoryController;
use App\Http\Controllers\System\Config\ConfigController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\System\Dashboard\DashboardController;
use App\Http\Controllers\System\Module\ModuleController;
use App\Http\Controllers\System\Auth\LoginController;
use App\Http\Controllers\System\Permission\PermissionController;
use App\Http\Controllers\System\Project\ProjectController;
use App\Http\Controllers\System\Role\RoleController;
use App\Http\Controllers\System\User\UserController;

Route::group(['prefix' => 'system/'], function () {

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form')->middleware('checkIfLoggedIn');
    Route::post('/login', [LoginController::class, 'login'])->name('login')->middleware('log.login');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::group(['middleware' => ['systemAuth', 'CheckRoleAndPermission']], function () {
        //Dashboard
        Route::get('/home', [DashboardController::class, 'index'])->name('home.index');

        // Category
        Route::resource('/categories', CategoryController::class);
        Route::get('/categories/change-status/{id}', [CategoryController::class, 'changeStatus']);

        //Config
        Route::resource('/configs', ConfigController::class);

        //Users
        Route::resource('/users', UserController::class);

        //Roles
        Route::resource('/roles', RoleController::class);

        //Permissions
        Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');

        //Permissions
        Route::resource('/permissions', PermissionController::class);
        Route::post('/change-password', [UserController::class, 'changePassword'])->name('changePassword');
        Route::resource('/modules', ModuleController::class);

        //Roles
        Route::resource('/projects', ProjectController::class);
    });
});
