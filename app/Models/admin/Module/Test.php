<?php

namespace App\Models\admin\Module;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{

    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'slug',
        'image',
        'ip_address',
    ];

    protected $table = "tests";
}
