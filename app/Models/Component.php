<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'image',
        'c_html',
        'c_css',
        'c_javascript',
        'link',
    ];

    // Relation with User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
