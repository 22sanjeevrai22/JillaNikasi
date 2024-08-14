<?php

namespace App\Models;


use App\Models\TollRecord;
use App\Models\Good;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Person extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;
    protected $guarded = [];

    public function records(){
        $this->morphedByMany(TollRecord::class, 'personable');
    }

    public function vehicles(){
        $this->morphedByMany(Vehicle::class, 'personable');
    }

    public function goods(){
        $this->morphedByMany(Good::class, 'personable');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->width(50)
            ->height(50)
            ->keepOriginalImageFormat()
            ->nonQueued();

        $this
            ->addMediaConversion('thumbnail')
            ->width(300)
            ->height(300)
            ->keepOriginalImageFormat()
            ->nonQueued();
    }
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('cover')
            ->singleFile();
    }
}
