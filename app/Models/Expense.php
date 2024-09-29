<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
     protected $fillable = [
        'user_id',
        'current_date',
        'breakfast',
        'lunch',
        'afternoon_meal',
        'dinner',
        'coffee',
        'fuel',
        'sports',
        'e_wallet',
        'other_shopping',
        'other_expenses',
        'rent',
        'total_spending_today',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
