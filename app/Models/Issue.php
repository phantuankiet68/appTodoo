<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'subject',
        'key',
        'level',
        'description',
        'reference',
        'start_date',
        'end_date',
        'category_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function assignedUsers()
    {
        return $this->belongsToMany(User::class, 'issue_users', 'issue_id', 'user_id');
    }
    public function images()
    {
        return $this->hasMany(IssueImage::class);
    }
}
