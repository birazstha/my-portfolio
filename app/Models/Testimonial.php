<?php

namespace App\Models;

use App\Models\File;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    public $timestamps = true;
    public $guarded = ['id'];
    protected static $logName = 'Testimonial';


    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function scopeRank($query)
    {
        return $query->orderBy('rank', 'ASC');
    }
}
