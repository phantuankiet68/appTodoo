<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'choose',
        'language',
        'content',
        'description',
        'html',
        'css',
        'javascript',
        'front_end',
        'back_end',
        'image_path',
        'status'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function views()
    {
        return $this->hasMany(ViewNow::class, 'blog_id', 'id');
    }
    public function likes()
    {
        return $this->hasMany(LikeNow::class, 'blog_id', 'id');
    }
    public function shares()
    {
        return $this->hasMany(ShareNow::class, 'blog_id', 'id');
    }
}
