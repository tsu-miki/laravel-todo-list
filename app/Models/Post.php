<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // テーブル名
    protected $table = 'posts';

    // 可変項目
    protected $fillable =
    [
        'content'
    ];
}
