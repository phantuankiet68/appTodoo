<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;
    protected $table = 'salaries'; 

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'date_create',
        'current_time_start',
        'current_time_end',
        'total_working_time',
        'total_overtime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
