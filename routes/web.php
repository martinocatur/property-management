<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;

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

Route::get('/', [PropertyController::class, 'showList'])->name('property.list');
Route::get('/create', [PropertyController::class, 'create'])->name('property.create');
Route::get('/edit/{property}', [PropertyController::class, 'form'])->name('property.edit');
Route::put('/update/{id}', [PropertyController::class, 'save'])->name('property.update');
