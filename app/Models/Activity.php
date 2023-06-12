<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'photo', 'description', 'location', 'activity_type', 'cost', 'total_child', 'organizer', 'datetime'];
}
