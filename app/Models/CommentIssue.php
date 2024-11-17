<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentIssue extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'user_id',
        'issue_id',
        'assignee_id',
        'start_date',
        'end_date',
        'status'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function assignee()
    {
        return $this->belongsTo(User::class, 'assignee_id');
    }

    public function issue()
    {
        return $this->belongsTo(Issue::class);
    }
}
