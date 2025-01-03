<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    use HasFactory;
    protected $table = 'codes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'category_id',
        'name',
        'description',
        'image',
        'code',
        'link',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
