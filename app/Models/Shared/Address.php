<?php

namespace App\Models\Shared;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model 
{

    protected $table = 'address';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}