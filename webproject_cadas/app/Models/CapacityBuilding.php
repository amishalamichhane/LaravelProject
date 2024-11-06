<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CapacityBuilding extends Model
{
    use HasFactory;

    protected $table = 'capacity_building';

    protected $fillable = [
        'section_title',
        'section_content',
        'image_url', // Include the new field here
        'slug',
    ];

    protected static function boot()
    {
        parent::boot();

        // Automatically generate a slug based on the section title when creating or updating
        static::creating(function ($CapacityBuilding) {
            $CapacityBuilding->slug = Str::slug($CapacityBuilding->section_title);
        });

        static::updating(function ($CapacityBuilding) {
            $CapacityBuilding->slug = Str::slug($CapacityBuilding->section_title);
        });
    }


}
