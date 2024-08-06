<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VehicleTypeController;
use App\Http\Controllers\VehicleController;

Route::get('dashboard', function () {
    return redirect()->route('admin.dashboard');
})->name('dashboard');


Route::prefix('admin')->group(function () {

    Route::get('/', function(){
        return redirect()->route('admin.dashboard');
    });
    Route::get('dashboard', [DashboardController::class, 'index'] )->name('admin.dashboard');
    Route::get('persons', [PersonController::class, 'index'])->name('persons.index');
    Route::get('persons/create', [PersonController::class, 'create'])->name('persons.create');
    Route::post('persons/store', [PersonController::class, 'store'])->name('persons.store');
    Route::get('persons/{person}/edit', [PersonController::class, 'edit'])->name('persons.edit');
    Route::put('persons/{person}/update', [PersonController::class, 'update'])->name('persons.update');
    Route::delete('persons/{person}', [PersonController::class, 'destroy'])->name('persons.destroy');

    Route::get('vehicle-types', [VehicleTypeController::class, 'index'])->name('vehicle-types.index');
    Route::get('vehicle-types/create', [VehicleTypeController::class, 'create'])->name('vehicle-types.create');
    Route::get('vehicle-types/{vehicle-type}/edit', [VehicleTypeController::class, 'edit'])->name('vehicle-types.edit');
    Route::delete('vehicle-types/{vehicle-type}', [VehicletypeController::class, 'destroy'])->name('vehicle-types.destroy');

    Route::get('vehicles', [VehicleController::class, 'index'])->name('vehicles.index');
    Route::get('vehicles/create', [VehicleController::class, 'create'])->name('vehicles.create');
    Route::get('vehicles/{vehicle}/edit', [VehicleController::class, 'edit'])->name('vehicles.edit');

    Route::get('goods', function () {
        return view('goods.index');
    })->name('goods.index');
    Route::get('goods/create', function () {
        return view('goods.create');
    })->name('goods.create');
    Route::get('goods/{good}/edit', function () {
        return view('goods.edit');
    })->name('goods.edit');
});
