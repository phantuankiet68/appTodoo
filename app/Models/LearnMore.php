<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearnMore extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'language_id',
        'vocabulary',
        'meaning_of_vocabulary',
        'example',
        'meaning_of_example',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
