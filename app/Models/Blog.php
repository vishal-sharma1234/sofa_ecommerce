<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Blog extends Model
{

    public function category()
    {
        return $this->belongsTo(BlogCategory::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'blog_id', 'id');
    }
}
