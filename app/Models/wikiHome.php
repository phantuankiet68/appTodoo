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
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function views()
    {
        return $this->hasMany(ViewNow::class, 'wiki_id', 'id');
    }
    public function likes()
    {
        return $this->hasMany(LikeNow::class, 'wiki_id', 'id');
    }
    public function shares()
    {
        return $this->hasMany(ShareNow::class, 'wiki_id', 'id');
    }
}
