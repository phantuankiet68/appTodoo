<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings'; 

    protected $fillable = [
        'user_id', 'setting', 'issue', 'posts', 'chat', 'task', 'workflow',
        'salary', 'expense', 'add_japanese', 'japanese', 'learn_japanese',
        'add_english', 'english', 'learn_english', 'question', 'word', 'excel',
        'test_code', 'component', 'color', 'html', 'js', 'vue', 'react', 'jquery',
        'angular', 'php', 'laravel', 'node', 'cshap', 'java', 'javascript', 'ftp',
        'ubuntu', 'mysql', 'sqlsever', 'mongo', 'mysqlworkbench', 'postgreSQL', 'error'
    ];

    protected $attributes = [
        'setting' => 0,
        'issue' => 0,
        'posts' => 0,
        'chat' => 0,
        'task' => 0,
        'workflow' => 0,
        'salary' => 0,
        'expense' => 0,
        'add_japanese' => 0,
        'japanese' => 0,
        'learn_japanese' => 0,
        'add_english' => 0,
        'english' => 0,
        'learn_english' => 0,
        'question' => 0,
        'word' => 0,
        'excel' => 0,
        'test_code' => 0,
        'component' => 0,
        'color' => 0,
        'html' => 0,
        'js' => 0,
        'vue' => 0,
        'react' => 0,
        'jquery' => 0,
        'angular' => 0,
        'php' => 0,
        'laravel' => 0,
        'node' => 0,
        'cshap' => 0,
        'java' => 0,
        'javascript' => 0,
        'ftp' => 0,
        'ubuntu' => 0,
        'mysql' => 0,
        'sqlsever' => 0,
        'mongo' => 0,
        'mysqlworkbench' => 0,
        'postgreSQL' => 0,
        'error' => 0
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
