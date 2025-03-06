<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttachmentProject extends Model
{
    use HasFactory;
    protected $fillable = [
        'issue_project_id',
        'file_path',
    ];


    public function issueProject()
    {
        return $this->belongsTo(IssueProject::class, 'issue_project_id');
    }
}
