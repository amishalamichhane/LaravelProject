<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingPaper extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'authors',
        'date',
        'summary',
        'file_path',
    ];
}
