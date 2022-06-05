<?php

// namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FakturController;
use App\Http\Controllers\InventoryController;
use App\Http\Middleware\IsAdmin;

require __DIR__.'/auth.php';

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/view', function() {
    return view('view');
})->middleware(['auth'])->name('view');

Route::get(
    '/create/inventory',
    [InventoryController::class, 'CreateInventory']
)->middleware(['IsAdmin'])->name('CreateInventory');

// Route::get('/users', [App\Http\Controllers\InventoryController::class, 'index']);

// Route::get('/create/inventory', 'App\Http\Controllers\InventoryController@CreateInventory')->name('CreateInventory');

Route::post(
    '/store/inventory',
    [InventoryController::class, 'StoreInventory']
)->middleware(['IsAdmin'])->name('StoreInventory');

Route::get(
    'show/inventory',
    [InventoryController::class, 'ShowInventory']
)->middleware(['IsAdmin'])->name('ShowInventory');

Route::get(
    'show/inventory/{id}',
    [InventoryController::class, 'ShowInventoryById']
)->middleware(['IsAdmin'])->name('ShowInventoryById');

Route::get(
    'update/inventory/{id}',
    [InventoryController::class, 'formUpdateInventory']
)->middleware(['IsAdmin'])->name('formUpdateInventory');

Route::patch(
    'updating/inventory/{id}',
    [InventoryController::class, 'UpdateInventory']
)->middleware(['IsAdmin'])->name('UpdateInventory');

Route::delete(
    'delete/book/{id}',
    [InventoryController::class, 'DeleteInventory']
)->middleware(['IsAdmin'])->name('DeleteInventory');

Route::get(
    'create/faktur',
    [FakturController::class, 'CreateFaktur']
)->name('CreateFaktur');

Route::get(
    'store/faktur',
    [FakturController::class, 'StoreFaktur']
)->name('StoreFaktur');

Route::get(
    'show/faktur',
    [FakturController::class, 'ShowFaktur']
)->name('ShowFaktur');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
