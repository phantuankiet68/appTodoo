<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewNow extends Model
{
    use HasFactory;
    protected $fillable = ['news_id', 'interface_id','document_id','wiki_id', 'view_count', 'ip_address', 'user_agent'];
}
