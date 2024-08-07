<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\VehicleType;

class Vehicle extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function vehicleType(){
        return $this->belongsTo(VehicleType::class, 'vehicle_type_id');
    }
}
