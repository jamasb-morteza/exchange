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

use MJamasb\Currency\Http\Controllers\CurrencyController;

Route::prefix('currency')->group(function ($router) {
    $router->get('/', [CurrencyController::class, 'index'])->name('currencies.index');
    $router->get('/create', [CurrencyController::class, 'create'])->name('currencies.create');
    $router->get('/{currency}/edit', [CurrencyController::class, 'edit'])->name('currencies.edit');

    $router->post('/', [CurrencyController::class, 'store'])->name('currencies.store');
    $router->put('/{currency}', [CurrencyController::class, 'update'])->name('currencies.update');
    $router->delete('/{currency}', [CurrencyController::class, 'destroy'])->name('currencies.destroy');

    $router->get('/{currency}', [CurrencyController::class, 'show'])->name('currencies.show');
});
