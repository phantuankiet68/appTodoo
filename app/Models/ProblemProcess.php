<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProblemProcess extends Model
{
    use HasFactory;
    protected $table = 'problem_processes';

    protected $fillable = [
        'title',
        'description',
        'status',
        'progress',
    ];


    protected $attributes = [
        'status' => 'todo',
        'progress' => 0,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
