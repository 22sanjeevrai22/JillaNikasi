<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Vehicle;

class VehicleType extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function vehicles(){
        return $this->hasMany(Vehicle::class, 'vehicle_type_id');
    }

}
