<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'description',
        'occupancy',
        'name',
        'bed_type',
        'category',
        'room_number',
        'price',
        'status',
    ];
}
