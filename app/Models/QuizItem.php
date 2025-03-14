<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'lesson_id', 
        'quiz_category_id',
        'difficulty', 
        'question', 
        'option_a', 
        'option_b', 
        'option_c',
        'option_d', 
        'correct_answer', 
        'explanation', 
        'language', 
        'level', 
        'user_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
    
    public function quizCategory()
    {
        return $this->belongsTo(QuizCategory::class, 'quiz_category_id');
    }
}
