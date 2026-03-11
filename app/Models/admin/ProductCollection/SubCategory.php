<?php

namespace App\Models\admin\ProductCollection;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{

    protected $guarded = [];
    protected $table = 'sub_categories';

    public function products()
    {
        return $this->hasMany(Product::class, 'sub_category_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
