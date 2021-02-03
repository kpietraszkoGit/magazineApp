<?php

namespace App\Policies;

use App\{User,TeamObject}; 
use Illuminate\Auth\Access\HandlesAuthorization; 

class ObjectPolicy
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
     
    public function checkOwner(User $user, TeamObject $object)
    {
        return $user->id === $object->user_id;     
    }
}

