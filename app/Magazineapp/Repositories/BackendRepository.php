<?php

namespace App\Magazineapp\Repositories;

use App\Magazineapp\Interfaces\BackendRepositoryInterface; 
use App\{User, Photo, Address, TeamObject, Person};

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

    public function getPhoto($id)
    {
        return Photo::find($id);
    }
    
    public function updateUserPhoto(User $user,Photo $photo)
    {
        return $user->photos()->save($photo);
    }
    
    public function createUserPhoto($user,$path)
    {
        $photo = new Photo;
        $photo->path = $path;
        $user->photos()->save($photo);
    }
    
    public function deletePhoto(Photo $photo)
    {
        $path = $photo->storagepath;
        $photo->delete();
        return $path;
    }
        
    public function getObject($id)
    {
        return TeamObject::find($id);
    }
    
    public function updateObjectWithAddress($id, $request)
    {

        Address::where('object_id',$id)->update([
            'city'=>$request->input('city'),
            'street'=>$request->input('street'),
            'number'=>$request->input('number'),
            ]);

        $object = TeamObject::find($id);


        $object->name = $request->input('name');
        $object->description = $request->input('description');

        $object->save();

        return $object;

    }
    
    public function createNewObjectWithAddress($request)
    {
        $object = new TeamObject;
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

    public function getPerson($id)
    {
        return Person::find($id);
    }

    public function updatePerson($id,$request)
    {
        $person = Person::find($id);
        $person->name = $request->input('name');
        $person->surname = $request->input('surname');
        $person->city = $request->input('city');
        $person->street = $request->input('street');
        $person->number = $request->input('number');
        $person->clothes = $request->input('clothes');
        $person->description = $request->input('description');

        $person->save();

        return $person;
    }
    
    public function createNewPerson($request)
    {
        $person = new Person;
        $object = TeamObject::find( $request->input('object_id') );
        $person->object_id = $request->input('object_id') ;

        $person->name = $request->input('name');
        $person->surname = $request->input('surname');
        $person->city = $request->input('city');
        $person->street = $request->input('street');
        $person->number = $request->input('number');
        $person->clothes = $request->input('clothes');
        $person->description = $request->input('description');

        $person->save();

        $object->people()->save($person);

        return $person;
    }
    
    public function savePersonPhotos(Person $person, string $path)
    {
        $photo = new Photo;
        $photo->path = $path;
        return $person->photos()->save($photo); 
    }
    
    public function deletePerson(Person $person)
    {
        return $person->delete();
    }
}