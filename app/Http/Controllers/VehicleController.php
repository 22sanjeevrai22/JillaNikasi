<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Http\Requests\StoreVehicleRequest;
use App\Http\Requests\UpdateVehicleRequest;
use App\Models\VehicleType;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('panel.vehicles.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehicles = Vehicle::all();
        $vehicleTypes = VehicleType::all();
        // dd($vehicle->vehicleType->name);

        return view('panel.vehicles.create', compact('vehicles', 'vehicleTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVehicleRequest $request)
    {
        //
    }

    public function storeVehicle(array $data)
    {
        // dd($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        return view('panel.vehicles.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVehicleRequest $request, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle = Vehicle::find($vehicle->id);
        if ($vehicle) {
            $vehicle->delete();
            return redirect()->back()->with('success', 'Vehicle Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Vehicle Not Found');
        }
    }
}
