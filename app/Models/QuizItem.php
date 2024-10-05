<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizItem extends Model
{
    use HasFactory;

    protected $table = 'quiz_items'; // Specify the table name (optional)

    protected $fillable = [
        'language_id',
        'category_id',
        'question',
        'answer_a',
        'answer_b',
        'answer_c',
        'answer_d',
        'answer_correct',
    ];

    // Optionally, define relationships
    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
