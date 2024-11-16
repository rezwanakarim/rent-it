<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Slider extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $guarded =['id'];
    protected $appends = ['image'];

    public function setImageAttribute($value)
    {
        // delete old avatar
        $media = $this->getFirstMedia('image');
        if ($media) {
            $this->clearMediaCollection('image');
        }

        // add new image
        if ($value) {
            $this->addMedia($value)->toMediaCollection('image');
        }
    }

    public function getImageAttribute()
    {
        $media = $this->getFirstMedia('image');
        return $media ? $media->getFullUrl() : null;
    }
}
