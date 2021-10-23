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

use MJamasb\Coin\Http\Controllers\CoinController;

Route::prefix('coin')->group(function ($router) {
    $router->get('/', [CoinController::class, 'index'])->name('coins.index');
    $router->get('/create', [CoinController::class, 'create'])->name('coins.create');
    $router->get('/{coin}/edit', [CoinController::class, 'edit'])->name('coins.edit');

    $router->post('/', [CoinController::class, 'store'])->name('coins.store');
    $router->put('/{coin}', [CoinController::class, 'update'])->name('coins.update');
    $router->delete('/{coin}', [CoinController::class, 'destroy'])->name('coins.destroy');

    $router->get('/{coin}', [CoinController::class, 'show'])->name('coins.show');
});
