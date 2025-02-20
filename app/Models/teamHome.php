<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teamHome extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'level',
        'image_path',
        'description',
        'language',
        'status',
        'stt',
    ];
}
