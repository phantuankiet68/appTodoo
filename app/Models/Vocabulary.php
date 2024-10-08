<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    use HasFactory;
    protected $fillable = [
        'language_id',
        'category_id',
        'name',
        'meaning_of_word',
        'romaji',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
