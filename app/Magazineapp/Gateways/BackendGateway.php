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
        'description'=>"required|string|min:100",
        ]);
        
        
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
            
            $request->validate( \App\Photo::imageRules($request,'objectPictures'));
            
            foreach($request->file('objectPictures') as $picture)
            {
                $path = $picture->store('objects', 'public');

                $this->bR->saveObjectPhotos($object, $path);
            }

        }
            
        return $object;
                
    }

    public function saveRoom($id, $request)
    {
    
        $request->validate([
        'room_number'=>"required|integer",
        'room_size'=>"required|integer",
        'price'=>"required|integer",
        'description'=>"required|string|min:100",
        ]);

        if($id)
        {
            $room = $this->bR->updateRoom($id,$request); 

        }
        else
        {
            $room = $this->bR->createNewRoom($request); 
        }


        if ($request->hasFile('roomPictures'))
        {
            $request->validate( \App\Photo::imageRules($request,'roomPictures'));

            foreach($request->file('roomPictures') as $picture)
            {
                $path = $picture->store('rooms', 'public');

                $this->bR->saveRoomPhotos($room, $path);
            }

        }

            return $room;
            
    }
    

}


