<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class File extends Model
{
    use HasFactory;

    public $timestamps = true;
    public $guarded = ['id'];

    public function fileable()
    {
        return $this->morphTo();
    }
}
