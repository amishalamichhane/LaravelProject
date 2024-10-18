<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CapacityBuilding extends Model
{
    use HasFactory;

    protected $table = 'capacity_building';

    protected $fillable = [
        'section_title',
        'section_content',
    ];
}
