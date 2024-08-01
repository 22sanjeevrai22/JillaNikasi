<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('persons', function () {
    return view('persons.index');
})->name('persons.index');
Route::get('persons/create', function () {
    return view('persons.create');
})->name('persons.create');
Route::get('persons/{person}/edit', function () {
    return view('persons.edit');
})->name('persons.edit');

Route::get('vehicle-types', function () {
    return view('vehicleType.index');
})->name('vehicle-types.index');
Route::get('vehicle-types/create', function () {
    return view('vehicleTypes.create');
})->name('vehicle-types.create');
Route::get('vehicle-types/{vehicle-type}/edit', function () {
    return view('vehicleTypes.edit');
})->name('vehicle-types.edit');

Route::get('vehicles', function () {
    return view('vehicles.index');
})->name('vehicles.index');
Route::get('vehicles/create', function () {
    return view('vehicles.create');
})->name('vehicles.create');
Route::get('vehicles/{vehicle}/edit', function () {
    return view('vehicles.edit');
})->name('vehicles.edit');

Route::get('goods', function () {
    return view('goods.index');
})->name('goods.index');
Route::get('goods/create', function () {
    return view('goods.create');
})->name('goods.create');
Route::get('goods/{good}/edit', function () {
    return view('goods.edit');
})->name('goods.edit');
