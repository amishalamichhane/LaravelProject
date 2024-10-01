<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Study extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'image',
        'data_link',
        'codebook_link',
        'questions_link',
        'report_link',
        'slug',
    ];


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($study) {
            $study->slug = Str::slug($study->title); // Generate slug from title
        });

        static::updating(function ($study) {
            $study->slug = Str::slug($study->title); // Update slug on title change
        });
    }


}
