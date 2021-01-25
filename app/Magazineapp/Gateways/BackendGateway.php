<?php

namespace App\Magazineapp\Gateways; /* Lecture 27 */

use App\Magazineapp\Interfaces\BackendRepositoryInterface; /* Lecture 27 */ 

/* Lecture 27 */
class BackendGateway { 
    

    public function __construct(BackendRepositoryInterface $bR ) 
    {
        $this->bR = $bR;
    }
    
    public function saveUser($request)
    {
        $request->validate([
        'name'=>"required|string|min:3",
        'surname'=>"required|string|min:2",
        'email'=>"required|email",
        ]);
        
        if ($request->hasFile('userPicture'))
        {
            $request->validate([
            'userPicture'=>"mimes:jpeg,jpg,png|max:2000",

            ]);
        }
        
        return $this->bR->saveUser($request);
    }

}


