<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function quizItems()
    {
        return $this->hasMany(QuizItem::class, 'quiz_category_id');
    }
}
