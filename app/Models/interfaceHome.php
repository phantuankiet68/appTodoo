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
        return $this->hasMany(ViewNow::class, 'interface_id', 'id');
    }
    public function likes()
    {
        return $this->hasMany(LikeNow::class, 'interface_id', 'id');
    }
    public function shares()
    {
        return $this->hasMany(ShareNow::class, 'interface_id', 'id');
    }
}
