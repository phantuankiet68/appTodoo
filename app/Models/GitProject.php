<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GitProject extends Model
{
    use HasFactory;
    protected $fillable = ['project_id', 'repo_url'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
