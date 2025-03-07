<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'issue_project_id',
        'user_id',
        'status',
        'assignee_id',
        'description',
        'url',
        'image',
    ];

    public function issueProject()
    {
        return $this->belongsTo(IssueProject::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function assignee()
    {
        return $this->belongsTo(User::class, 'assignee_id');
    }
}
