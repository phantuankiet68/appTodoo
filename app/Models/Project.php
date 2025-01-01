<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description','user_id', 'git', 'file', 'document', 'images'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'project_user');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
