<?php

namespace App\Models\Shared;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Shared\Subcategory;


class Category extends Model 
{

    protected $table = 'category';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function Subcategory()
    {
        return $this->hasOne(Subcategory::class, 'subcategory');
    }

}