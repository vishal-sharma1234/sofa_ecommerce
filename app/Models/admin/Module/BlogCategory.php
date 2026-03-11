<?php

namespace App\Models\admin\Module;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = "blog_categories";

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'category_id', 'id');
    }
}
