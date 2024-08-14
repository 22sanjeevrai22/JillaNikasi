<?php

namespace App\Models;
use App\Models\Person;
use App\Models\VehicleType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function owners(){
        return $this->morphedToMany(Person::class, 'personable');
    }

    public function vehicleType(){
        return $this->belongsTo(VehicleType::class, 'vehicle_type_id');
    }
}
