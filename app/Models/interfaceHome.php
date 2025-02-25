<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class interfaceHome extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'image_path',
        'description',
        'language',
        'status',
    ];
    public function views()
    {
        return $this->hasMany(View::class, 'interface_id', 'id');
    }
    public function likes()
    {
        return $this->hasMany(Like::class, 'interface_id', 'id');
    }
    public function shares()
    {
        return $this->hasMany(Share::class, 'interface_id', 'id');
    }
}
