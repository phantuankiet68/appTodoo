<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wikiHome extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'image_path',
        'description',
        'language',
        'status',
        'stt',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
