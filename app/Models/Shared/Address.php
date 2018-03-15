<?php

namespace App\Models\Shared;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Auth\User;
use App\Models\Shared\Events;
use App\Models\Shared\Address;
use App\Models\Shared\Category;
use App\Models\Shared\Subcategory;
use App\Models\Shared\Organizer;


class Address extends Model 
{

    protected $table = 'address';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];


    public function event()
    {
        return $this->belongsTo(Events::class, 'id' );
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
    public function organizer()
    {
        return $this->belongsTo(Organizer::class, 'id');
    }
}