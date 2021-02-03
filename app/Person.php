<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public $timestamps = false;
    
    public function photos()
    {
        return $this->morphMany('App\Photo', 'photoable');
    }
    
    public function object()
    {
        return $this->belongsTo('App\TeamObject','object_id');
    }
}
