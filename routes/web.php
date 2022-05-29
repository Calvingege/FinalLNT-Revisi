<?php

// namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;

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
)->name('CreateInventory');

// Route::get('/create/inventory', 'App\Http\Controllers\InventoryController@CreateInventory')->name('CreateInventory');

Route::post(
    '/store/inventory',
    [InventoryController::class, 'StoreInventory']
)->name('StoreInventory');

Route::get(
    'show/inventory',
    [InventoryController::class, 'ShowInventory']
)->name('ShowInventory');

// Route::get(
//     'show/inventory/{id}',
//     [InventoryController::class, 'ShowInventoryById']
// )->name('ShowInventoryById');

Route::get(
    'show/faktur',
    [InventoryController::class, 'ShowFaktur']
)->name('ShowFaktur');

Route::get(
    'update/inventory/{id}',
    [InventoryController::class, 'formUpdateInventory']
)->name('formUpdateInventory');

Route::patch(
    'updating/inventory/{id}',
    [InventoryController::class, 'UpdateInventory']
)->name('UpdateInventory');

Route::delete(
    'delete/book/{id}',
    [InventoryController::class, 'DeleteInventory']
)->name('DeleteInventory');

require __DIR__.'/auth.php';

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
