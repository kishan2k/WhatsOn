<?php

namespace App\Models\Shared;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Shared\Address;
use App\Models\Shared\Events;
use App\Models\Auth\User;
class Organizer extends Model 
{

    protected $table = 'organizer';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function address()
    {
        return $this->hasOne(Address::class, 'id');
    }
    public function events()
    {
        return $this->hasMany(Events::class, 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}