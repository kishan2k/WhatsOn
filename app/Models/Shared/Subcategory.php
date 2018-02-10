<?php

namespace App\Models\Shared;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model 
{

    protected $table = 'subcategory';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}