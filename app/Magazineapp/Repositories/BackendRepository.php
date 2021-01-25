<?php

namespace App\Magazineapp\Repositories; /* Lecture 27 */

use App\Magazineapp\Interfaces\BackendRepositoryInterface;  /* Lecture 27 */
use App\{User/* Lecture 39 */,Photo/* Lecture 40 */};


/* Lecture 27 */
class BackendRepository implements BackendRepositoryInterface  {   
 
    public function saveUser($request)
    {
        $user = User::find($request->user()->id);
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');
        $user->save();

        return $user;
    }

        /* Lecture 40 */
    public function getPhoto($id)
    {
        return Photo::find($id);
    }
    
    
    /* Lecture 40 */
    public function updateUserPhoto(User $user,Photo $photo)
    {
        return $user->photos()->save($photo);
    }
    
    /* Lecture 40 */
    public function createUserPhoto($user,$path)
    {
        $photo = new Photo;
        $photo->path = $path;
        $user->photos()->save($photo);
    }
    
    /* Lecture 40 */
    public function deletePhoto(Photo $photo)
    {
        $path = $photo->storagepath;
        $photo->delete();
        return $path;
    }
        
}