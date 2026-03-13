<?php

namespace App\Models;

use App\Models\admin\Module\Color;
use App\Models\front\CustomerRreview;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $guarded = [];


    public function colors()
    {
        return $this->belongsToMany(Color::class, 'product_colors');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }


    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id', 'id');
    }
    public function reviews()
    {
        return $this->hasMany(CustomerRreview::class, 'product_id', 'id');
    }
}
