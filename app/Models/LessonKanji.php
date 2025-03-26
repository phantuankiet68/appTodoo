<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonKanji extends Model
{
    use HasFactory;
    protected $fillable = [
        'lesson',
        'title',
        'level',
    ];
}
