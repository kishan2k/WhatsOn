<?php

namespace App\Models\Shared;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organizer extends Model 
{

    protected $table = 'organizer';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function AddAddressForOrganizer()
    {
        return $this->hasMany('CreateAddressTable', 'id');
    }

}