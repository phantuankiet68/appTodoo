<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'user_id',
        'name',
        'description',
        'date_start',
        'date_end',
        'status'
    ];
    public function categoryTodo()
    {
        return $this->belongsTo(CategoryTask::class, 'category_id');
    }
    public function userTodo()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
