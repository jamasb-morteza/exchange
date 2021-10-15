<?php

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


use MJamasb\User\Http\Controllers\UserController;

Route::group(['middleware' => 'auth', 'prefix' => 'users'], function ($router) {
    $router->get('/', [UserController::class, 'index'])->name('users.index');
    $router->get('/create', [UserController::class, 'create'])->name('users.create');
    $router->get('/{user}/edit', [UserController::class, 'edit'])->name('users.edit');

    $router->post('/', [UserController::class, 'store'])->name('users.store');
    $router->put('/{user}', [UserController::class, 'update'])->name('users.update');
    $router->delete('/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    $router->get('/{user}', [UserController::class, 'show'])->name('users.show');
    $router->get('/profile', [UserController::class, 'profile'])->name('users.profile');
    $router->put('/profile', [UserController::class, 'updateProfile'])->name('users.update_profile');
});

