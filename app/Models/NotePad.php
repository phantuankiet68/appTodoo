<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotePad extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'current_date', 'title', 'url', 'top','left'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
