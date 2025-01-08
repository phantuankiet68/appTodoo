<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task_project extends Model
{
    use HasFactory;

    /**
     * Bảng trong cơ sở dữ liệu
     *
     * @var string
     */
    protected $table = 'task_projects';

    protected $fillable = [
        'project_id',
        'name',
        'assignees',
        'status',
        'start_date',
        'due_date',
        'complete',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
