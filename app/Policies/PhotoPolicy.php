<?php

namespace App\Policies;

use App\{User,Photo}; /* Lecture 39 */
use Illuminate\Auth\Access\HandlesAuthorization; /* Lecture 39 */

class PhotoPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function checkOwner(User $user, Photo $photo)
    {
        if($photo->photoable_type == 'App\User')
        return $user->id === $photo->photoable_id;    
        // elseif($photo->photoable_type == 'App\TouristObject')
        // return $user->id === $photo->photoable->user_id;   
        // elseif($photo->photoable_type == 'App\Room')
        // return $user->id === $photo->photoable->object->user_id;   
         
    }
    
}
