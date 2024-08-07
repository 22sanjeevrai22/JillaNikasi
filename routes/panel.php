<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VehicleTypeController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\GoodController;

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
    Route::post('vehicles/store', [VehicleController::class, 'store'])->name('vehicles.store');
    Route::get('vehicles/{vehicle}/edit', [VehicleController::class, 'edit'])->name('vehicles.edit');
    Route::put('vehicles/{vehicle}/update', [VehicleController::class, 'update'])->name('vehicles.update');
    Route::delete('vehicles/{vehicle}', [VehicleController::class, 'destroy'])->name('vehicles.destroy');

    Route::get('units', [UnitController::class, 'index'])->name('units.index');
    Route::get('units/create', [UnitController::class, 'create'])->name('units.create');
    Route::post('units/store', [UnitController::class, 'store'])->name('units.store');
    Route::get('units/{unit}/edit', [UnitController::class, 'edit'])->name('units.edit');
    Route::put('units/{unit}/update', [UnitController::class, 'update'])->name('units.update');
    Route::delete('units/{unit}', [UnitController::class, 'destroy'])->name('units.destroy');

    Route::get('goods', [GoodController::class, 'index'])->name('goods.index');
    Route::get('goods/create', [GoodController::class, 'create'])->name('goods.create');
    Route::post('goods/store', [GoodController::class, 'store'])->name('goods.store');
    Route::get('goods/{good}/edit', [GoodController::class, 'edit'])->name('goods.edit');
    Route::put('goods/{good}/update', [GoodController::class, 'update'])->name('goods.update');
    Route::delete('goods/{good}', [GoodController::class, 'destroy'])->name('goods.destroy');
});
