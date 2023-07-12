<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyCRUDController;
use App\Http\Controllers\BuyerCRUDController;
use App\Http\Controllers\DoctorCRUDController;
use App\Http\Controllers\ItemCRUDController;
use App\Models\Doctor;
use App\Models\Item;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('companies', CompanyCRUDController::class);
Route::get('companies', [CompanyCRUDController::class, 'index'])->name('companies.index');
Route::get('companies/create', [CompanyCRUDController::class, 'create'])->name('companies.create');
Route::post('companies', [CompanyCRUDController::class, 'store'])->name('companies.store');
Route::get('companies/{company}/edit', [CompanyCRUDController::class, 'edit'])->name('companies.edit');
Route::post('companies/{company}', [CompanyCRUDController::class, 'update'])->name('companies.update');
Route::delete('companies/{company}', [CompanyCRUDController::class, 'destroy'])->name('companies.destroy');

// Route::resource('buyers', BuyerCRUDController::class);
Route::get('buyers', [BuyerCRUDController::class, 'index'])->name('buyers.index');
Route::get('buyers/create', [BuyerCRUDController::class, 'create'])->name('buyers.create');
Route::post('buyers', [BuyerCRUDController::class, 'store'])->name('buyers.store');
Route::get('buyers/{buyer}/edit', [BuyerCRUDController::class, 'edit'])->name('buyers.edit');
Route::post('buyers/{buyer}', [BuyerCRUDController::class, 'update'])->name('buyers.update');
Route::delete('buyers/{buyer}', [BuyerCRUDController::class, 'destroy'])->name('buyers.destroy');


// Route::resource('doctors', DoctorCRUDController::class);
Route::get('doctors', [DoctorCRUDController::class, 'index'])->name('doctors.index');
Route::get('doctors/create', [DoctorCRUDController::class, 'create'])->name('doctors.create');
Route::post('doctors', [DoctorCRUDController::class, 'store'])->name('doctors.store');
Route::get('doctors/{doctor}/edit', [DoctorCRUDController::class, 'edit'])->name('doctors.edit');
Route::post('doctors/{doctor}', [DoctorCRUDController::class, 'update'])->name('doctors.update');
Route::delete('doctors/{doctor}', [DoctorCRUDController::class, 'destroy'])->name('doctors.destroy');

Route::resource('items', ItemCRUDController::class);
// Route::get('items', [ItemCRUDController::class, 'index'])->name('items.index');
// Route::get('items/create', [ItemCRUDController::class, 'create'])->name('items.create');
// Route::post('items', [ItemCRUDController::class, 'store'])->name('items.store');
// Route::get('items/{item}/edit', [ItemCRUDController::class, 'edit'])->name('items.edit');
// Route::post('items/{item}', [ItemCRUDController::class, 'update'])->name('items.update');
// Route::delete('items/{item}', [ItemCRUDController::class, 'destroy'])->name('items.destroy');