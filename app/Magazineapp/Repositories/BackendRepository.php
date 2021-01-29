<?php

namespace App\Magazineapp\Repositories; /* Lecture 27 */

use App\Magazineapp\Interfaces\BackendRepositoryInterface;  /* Lecture 27 */
use App\{User, Photo, Address, TeamObject, Room};


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
        
    public function getObject($id)
    {
        return TeamObject::find($id);//zmienić nazwę TouristObject na TeamObject
    }
    
    
    /* Lecture 42 */
    public function updateObjectWithAddress($id, $request)
    {

        Address::where('object_id',$id)->update([
            'city'=>$request->input('city'),
            'street'=>$request->input('street'),
            'number'=>$request->input('number'),
            ]);

        $object = TeamObject::find($id);


        $object->name = $request->input('name');
        //$object->city_id = $request->input('city');
        $object->description = $request->input('description');

        $object->save();

        return $object;

    }
    
    
    /* Lecture 42 */
    public function createNewObjectWithAddress($request)
    {
        $object = new TeamObject;//tworzenie obiektu nowego
        $object->user_id = $request->user()->id;
        $object->name = $request->input('name');
        $object->description = $request->input('description');

        $object->save();


        $address = new Address;
        $address->city = $request->input('city');
        $address->street = $request->input('street');
        $address->number = $request->input('number');
        $address->object_id = $object->id;
        $address->save();
        $object->address()->save($address);

        return $object;
    }

    public function saveObjectPhotos(TeamObject $object, string $path)
    {

        $photo = new Photo;
        $photo->path = $path;
        return $object->photos()->save($photo);

    }

    public function getMyObjects($request)
    {
        return TeamObject::where('user_id',$request->user()->id)->get();
    }
    
    public function deleteObject($id)
    {
        return TeamObject::where('id',$id)->delete();
    }

    public function getRoom($id)
    {
        return Room::find($id);
    }

    public function updateRoom($id,$request)
    {
        $room = Room::find($id);
        $room->room_number = $request->input('room_number');
        $room->room_size = $request->input('room_size');
        $room->price = $request->input('price');
        $room->description = $request->input('description');

        $room->save();

        return $room;
    }
    
    public function createNewRoom($request)
    {
        $room = new Room;
        $object = TeamObject::find( $request->input('object_id') );
        $room->object_id = $request->input('object_id') ;

        $room->room_number = $request->input('room_number');
        $room->room_size = $request->input('room_size');
        $room->price = $request->input('price');
        $room->description = $request->input('description');

        $room->save();

        $object->rooms()->save($room);

        return $room;
    }
    
    public function saveRoomPhotos(Room $room, string $path)
    {
        $photo = new Photo;
        $photo->path = $path;
        return $room->photos()->save($photo); 
    }
    
    public function deleteRoom(Room $room)
    {
        return $room->delete();
    }
}