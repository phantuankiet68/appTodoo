<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShareNow extends Model
{
    use HasFactory;
    protected $fillable = ['news_id', 'interface_id','document_id','wiki_id','blog_id', 'view_count'];
}
