<?php

namespace App\Magazineapp\Gateways;

use App\Magazineapp\Interfaces\BackendRepositoryInterface;

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

    public function saveObject($id, $request)
    {

        $request->validate([
        'city'=>"required|string",
        'name'=>"required|string",
        'street'=>"required|string",
        'number'=>"required|integer",
        'description'=>"required|string|min:20|max:400",
        ]);

        if ($request->hasFile('objectPictures'))
        {   
            $request->validate( \App\Photo::imageRules($request,'objectPictures'));
        }
        
        if($id)
        {
            $object = $this->bR->updateObjectWithAddress($id, $request);
        }
        else
        {
            $object = $this->bR->createNewObjectWithAddress($request);
        }


        if ($request->hasFile('objectPictures'))
        {            
            foreach($request->file('objectPictures') as $picture)
            {
                $path = $picture->store('objects', 'public');

                $this->bR->saveObjectPhotos($object, $path);
            }
        }
            
        return $object;
                
    }

    public function savePerson($id, $request)
    {
    
        $request->validate([
            'name'=>"required|string",
            'surname'=>"required|string",
            'city'=>"required|string",
            'street'=>"required|string",
            'number'=>"required|integer",
            'clothes'=>"required|string",
            'description'=>"required|string|min:20|max:200",
            ]);

        if ($request->hasFile('personPictures'))
        {
            $request->validate( \App\Photo::imageRules($request,'personPictures'));
        }

        if($id)
        {
            $person = $this->bR->updatePerson($id,$request); 
        }
        else
        {
            $person = $this->bR->createNewPerson($request); 
        }


        if ($request->hasFile('personPictures'))
        {
            foreach($request->file('personPictures') as $picture)
            {
                $path = $picture->store('persons', 'public');

                $this->bR->savePersonPhotos($person, $path);
            }
        }

        return $person;
            
    }
    

}


