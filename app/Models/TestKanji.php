<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestKanji extends Model
{
    use HasFactory;
    protected $fillable = [
        'question', 
        'option_a', 
        'option_b', 
        'option_c', 
        'option_d', 
        'correct_answer', 
        'explanation', 
        'language', 
        'difficulty', 
        'level', 
        'user_id', 
        'lesson_kanjis_id', 
    ];

    public function lesson()
    {
        return $this->belongsTo(LessonKanji::class, 'lesson_kanjis_id');
    }

    
}
