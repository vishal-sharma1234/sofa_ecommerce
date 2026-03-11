<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // protected $guarded = [];
    protected $fillable = [
        'blog_id',
        'name',
        'email',
        'comment',
    ];
}
