<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paragraph extends Model
{
    use HasFactory;
    protected $fillable = [
        'language_id',
        'category_id',
        'name',
        'description',
        'image',
    ];

    // Thiết lập mối quan hệ (nếu cần)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
