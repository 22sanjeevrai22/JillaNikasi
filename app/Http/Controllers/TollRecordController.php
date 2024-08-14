<?php

namespace App\Http\Controllers;

use App\Http\Controllers\GoodController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\VehicleController;
use App\Models\Good;
use App\Models\Unit;
use App\Models\Vehicle;
use App\Models\VehicleType;

use App\Models\TollRecord;
use App\Http\Requests\StoreTollRecordRequest;
use App\Http\Requests\UpdateTollRecordRequest;

class TollRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicleTypes = VehicleType::all();
        $goods = Good::all();
        $vehicles = Vehicle::all();
        $units = Unit::all();

        return view('panel.record.index', compact('vehicleTypes', 'goods', 'units'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTollRecordRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(TollRecord $tollRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TollRecord $tollRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTollRecordRequest $request, TollRecord $tollRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TollRecord $tollRecord)
    {
        //
    }
}
