<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kanji extends Model
{
    use HasFactory;
    protected $fillable = [
        'lesson_kanjis_id',
        'language',
        'kanji',
        'meaning_han',
        'onyomi',
        'compounds',
        'related_words',
        'example_sentence',
        'example_meaning',
        'user_id'
    ];

    public function lesson()
    {
        return $this->belongsTo(LessonKanji::class, 'lesson_kanjis_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
