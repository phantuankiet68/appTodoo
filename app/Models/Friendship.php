<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Friendship extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'friend_id', 'status'];

    public function sender()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'friend_id');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
      public function friend(): BelongsTo
    {
        return $this->belongsTo(User::class, 'friend_id');
    }
    public function allFriends(): \Illuminate\Database\Eloquent\Collection
    {
        $friends1 = $this->belongsToMany(User::class, 'friendships', 'user_id', 'friend_id')
                        ->wherePivot('status', 'accepted')
                        ->withPivot('status')
                        ->get();

        $friends2 = $this->belongsToMany(User::class, 'friendships', 'friend_id', 'user_id')
                        ->wherePivot('status', 'accepted')
                        ->withPivot('status')
                        ->get();

        return $friends1->merge($friends2);
    }
}