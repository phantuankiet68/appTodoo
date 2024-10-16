<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'location', 'description'];

    public function images()
    {
        return $this->hasMany(PostImage::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
