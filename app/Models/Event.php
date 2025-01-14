<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'color',
        'start',
        'end',
        'location',
        'status',
        'display_mode',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
