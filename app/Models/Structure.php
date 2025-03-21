<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'difficulty',
        'structure',
        'example',
        'translation',
        'explanation',
        'language',
        'level',
        'status',
        'user_id',
        'lesson_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
