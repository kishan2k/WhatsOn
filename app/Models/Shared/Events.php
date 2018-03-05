<?php

namespace App\Models\Shared;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Events extends Model 
{

    protected $table = 'events';
    public $timestamps = true;

    use SoftDeletes;
    use Searchable;
    protected $dates = ['deleted_at'];

    public function addCategoryID()
    {
        return $this->hasMany('CreateCategoryTable', 'id');
    }

    public function addOrganizerID()
    {
        return $this->hasMany('CreateOrganizerTable', 'id');
    }

    public function AddEventAddress()
    {
        return $this->hasMany('CreateAddressTable', 'id');
    }

}