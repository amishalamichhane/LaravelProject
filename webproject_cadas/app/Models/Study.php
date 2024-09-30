<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    ];
}
