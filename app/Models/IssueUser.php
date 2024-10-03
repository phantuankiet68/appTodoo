<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssueUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'issue_id',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
