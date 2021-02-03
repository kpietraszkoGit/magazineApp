<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class TeamObject extends Model
{
    protected $table = 'objects';
    public $timestamps = false;
    
    public function photos()
    {
        return $this->morphMany('App\Photo', 'photoable');
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('name', 'asc');
    }

    public function users()
    {
        return $this->morphToMany('App\User', 'likeable');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function address()
    {
        return $this->hasOne('App\Address','object_id');
    }
    
    public function people()
    {
        return $this->hasMany('App\Person','object_id');
    }
}