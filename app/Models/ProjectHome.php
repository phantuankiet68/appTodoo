<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectHome extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
        'image_path',
        'description',
        'language',
        'status',
        'stt',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
