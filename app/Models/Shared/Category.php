<?php

namespace App\Models\Shared;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model 
{

    protected $table = 'category';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function addSubcategory()
    {
        return $this->hasMany('CreateSubcategoryTable', 'id');
    }

}