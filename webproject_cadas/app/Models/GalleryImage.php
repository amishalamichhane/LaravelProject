<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    use HasFactory;

    protected $fillable = ['gallery_id', 'image_url'];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}