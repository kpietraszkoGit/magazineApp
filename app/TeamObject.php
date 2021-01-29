<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class TeamObject extends Model
{
    protected $table = 'objects';
    public $timestamps = false;

    //use magazineapp\Presenters\ObjectPresenter;

    // public function city() 
    // {
    //     return $this->belongsTo('App\City');
    // }
    
    public function photos()
    {
        return $this->morphMany('App\Photo', 'photoable');//relacja polimorficzna
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('name', 'asc');//posegregowanie od A do Z
    }

    public function users()
    {
        return $this->morphToMany('App\User', 'likeable');//relacja wiele to wielu
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function address()
    {
        return $this->hasOne('App\Address','object_id');//relacja jeden do jednego
    }
    
    public function rooms()
    {
        return $this->hasMany('App\Room','object_id');//jeden do wielu
    }
    
    // public function comments()
    // {
    //     return $this->morphMany('App\Comment', 'commentable');//relacja jeden do wielu
    // }
    
    // public function articles()
    // {
    //     return $this->hasMany('App\Article','object_id');
    // }

    // public function isLiked()
    // {
    //     return $this->users()->where('user_id', Auth::user()->id)->exists();
    // }
}