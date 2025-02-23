<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class interfaceHome extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'image_path',
        'description',
        'language',
        'status',
    ];
}
