<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class QuestionCategory extends Model
{
    use HasFactory;

    protected $table = 'question_categories';

    protected $fillable = ['name', 'slug'];

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class, 'category_id');
    }
}
