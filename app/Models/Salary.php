<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;
    protected $fillable = ['day', 'data', 'start_time', 'end_time', 'user_id','full_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
