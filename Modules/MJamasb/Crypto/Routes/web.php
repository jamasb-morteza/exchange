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
use MJamasb\Crypto\Http\Controllers\CryptoController;
Route::prefix('crypto')->group(function ($router) {
    $router->get('/', [CryptoController::class, 'index'])->name('crypto.index');
    $router->get('/create', [CryptoController::class, 'create'])->name('crypto.create');
    $router->get('/{crypto}/edit', [CryptoController::class, 'edit'])->name('crypto.edit');

    $router->post('/', [CryptoController::class, 'store'])->name('crypto.store');
    $router->put('/{crypto}', [CryptoController::class, 'update'])->name('crypto.update');
    $router->delete('/{crypto}', [CryptoController::class, 'destroy'])->name('crypto.destroy');

    $router->get('/{crypto}', [CryptoController::class, 'show'])->name('crypto.show');
});
