<?php

namespace App\Models\Shared;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Shared\Category;
class Subcategory extends Model 
{

    protected $table = 'subcategory';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id');
    }

}