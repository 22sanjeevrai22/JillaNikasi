<?php

namespace App\Http\Controllers;

use App\Models\Good;
use App\Models\Unit;
use App\Models\Vehicle;
use App\Models\VehicleType;
use App\Models\TollRecord;
use App\Http\Requests\StoreTollRecordRequest;
use App\Http\Requests\UpdateTollRecordRequest;
use App\Models\Person;
use Illuminate\Http\Request;


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

    public function store(StoreTollRecordRequest $request)
    {
        // Prepare data for PersonController
        $personData = [
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'contact_number' => $request->contact_number,
            'email' => $request->email,
        ];
        
        Person::create($personData);

        $vehicleData = [
            'vehicle_reg_no' => $request->vehicle_reg_no,
            'vehicle_type_id' => $request->vehicle_type_id,

        ];
        Vehicle::create($vehicleData);


        $goodData = [
            'name' => $request->good_name,
            'quantity' => $request->good_quantity,
            'price_per_unit' => $request->price,
        ];
        Good::create($goodData);


        return back()->with('success', 'Form submitted successfully!');
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
    // public function store(StoreTollRecordRequest $request)
    // {

    // }

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
        $tollRecord = TollRecord::find($tollRecord->id);
        if ($tollRecord) {
            $tollRecord->delete();
            return back()->with('deleted', 'Record Deleted Successfully');
        } else {
            return back()->with('error', 'Record Not Found');
        }
    }
}
