<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'full_name',
        'email',
        'password',
        'phone',
        'gender',
        'roles',
        'address'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

    public function assignedIssues()
    {
        return $this->belongsToMany(Issue::class, 'issue_users', 'user_id', 'issue_id');
    }

    public function sentFriendRequests()
    {
        return $this->hasMany(Friendship::class, 'user_id')->where('status', 'pending');
    }

    public function receivedFriendRequests(): HasMany
    {
        return $this->hasMany(Friendship::class, 'friend_id')->where('status', 'pending');
    }

    public function sentFriendships()
    {
        return $this->hasMany(Friendship::class, 'user_id')->where('status', 'accepted');
    }

    public function receivedFriendships()
    {
        return $this->hasMany(Friendship::class, 'friend_id')->where('status', 'accepted');
    }

    public function getFriendsAttribute()
    {
        $sentFriends = $this->sentFriendships()->with('friend')->get()->pluck('friend');
        $receivedFriends = $this->receivedFriendships()->with('user')->get()->pluck('user');

        return $sentFriends->merge($receivedFriends);
    }
    public function sentMessages()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function receivedMessages()
    {
        return $this->hasMany(Message::class, 'receiver_id');
    }
}
