<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Good;

class Unit extends Model
{
    use HasFactory, SoftDeletes;
     protected $guarded = [];

     public function good(){
        $this->belongsTo(Good::class, 'good_id');
     }
}
