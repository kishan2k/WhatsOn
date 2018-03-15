<?php

namespace App\Models\Shared;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

use App\Models\Auth\User;
use App\Models\Shared\Events;
use App\Models\Shared\Address;
use App\Models\Shared\Category;
use App\Models\Shared\Subcategory;
use App\Models\Shared\Organizer;


class Events extends Model 
{

    protected $table = 'events';
    public $timestamps = true;

    use SoftDeletes;
    use Searchable;


    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->hasOne(Category::class, 'id');
    }

    public function organizer()
    {
        return $this->hasOne(Organizer::class, 'id');
    }

    public function address()
    {
        return $this->hasOne(Address::class, 'id');
    }

}