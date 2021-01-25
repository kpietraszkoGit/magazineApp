<?php

namespace App; /* Lecture 14 */

use Illuminate\Database\Eloquent\Model; /* Lecture 14 */

/* Lecture 14 */
class Photo extends Model
{
    
    public $timestamps = false; /* Lecture 40 */
    
    /* Lecture 14 */
    public function photoable()
    {
        return $this->morphTo();
    }
    
    /* Lecture 40 */
    public function getPathAttribute($value)
    {
        return asset("storage/{$value}");
    }
    
    
    /* Lecture 40 */
    public function getStoragepathAttribute()
    {
        return $this->original['path'];
    }
    
    
}
