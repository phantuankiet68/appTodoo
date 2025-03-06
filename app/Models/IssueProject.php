<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssueProject extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'user_id',
        'title',
        'description',
        'start_date',
        'due_date',
        'status',
        'priority',
        'category',
        'assignee_id',
        'milestone',
    ];


    public function project()
    {
        return $this->belongsTo(Project::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function assignee()
    {
        return $this->belongsTo(User::class, 'assignee_id');
    }


    public function attachments()
    {
        return $this->hasMany(AttachmentProject::class, 'issue_project_id');
    }
}
