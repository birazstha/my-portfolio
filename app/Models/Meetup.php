<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meetup extends Model
{
    use HasFactory;
    protected $table = "meetups";
    protected $fillable = ['title', 'address', 'description', 'image'];
}
