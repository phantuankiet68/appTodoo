<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class HomeProduct extends Model
{
    use HasFactory;
    
    protected $table = 'home_products';

    protected $fillable = [
        'title',
        'user_id',
        'image_path',
        'description',
        'language',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->slug = Str::slug($product->title, '-');
        });

        static::updating(function ($product) {
            if ($product->isDirty('title')) {
                $product->slug = Str::slug($product->title, '-');
            }
        });
    }
}
