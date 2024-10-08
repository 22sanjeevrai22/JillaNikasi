<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Unit;
use App\Models\Person;

class Good extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function owners()
    {
        return $this->morphToMany(Person::class, 'personable');
    }

    public function Units(){
        $this->hasMany(Unit::class, 'good_id');
    }
}
