<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'date_of_birth',
        'gender',
        'link_facebook',
        'link_instagram',
        'link_linkin',
        'link_link',
        'address',
        'description',
        'roles',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
