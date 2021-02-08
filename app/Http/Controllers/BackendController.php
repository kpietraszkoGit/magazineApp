<?php

namespace App\Http\Controllers;

use App\{TeamObject, Person, Zywiecwoman, Zywiecman, Lowiczwoman, Lowiczman, Lachywoman, Lachyman, Cracoweastwoman, Cracoweastman, Cracowwoman, Cracowman, Shepherdoutfitwoman, Shepherdoutfitman, Highlanderoutfitwoman, Highlanderoutfitman};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Magazineapp\Interfaces\BackendRepositoryInterface;
use App\Magazineapp\Gateways\BackendGateway;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class BackendController extends Controller
{
    public function __construct(BackendGateway $backendGateway, BackendRepositoryInterface $backendRepository)
    {
        $this->bG = $backendGateway;
        $this->bR = $backendRepository;
    }

    public function index()
    { 
        $highlanderoutfitmen = Highlanderoutfitman::all();
        $highlanderoutfitwomen = Highlanderoutfitwoman::all();
        $shepherdoutfitmen = Shepherdoutfitman::all();
        $shepherdoutfitwomen = Shepherdoutfitwoman::all();
        $cracowmen = Cracowman::all();
        $cracowwomen = Cracowwoman::all();
        $cracoweastmen = Cracoweastman::all();
        $cracoweastwomen = Cracoweastwoman::all();
        $lachymen = Lachyman::all();
        $lachywomen = Lachywoman::all();
        $lowiczmen = Lowiczman::all();
        $lowiczwomen = Lowiczwoman::all();
        $zywiecmen = Zywiecman::all();
        $zywiecwomen = Zywiecwoman::all();
        return view('backend.index', compact('highlanderoutfitmen', 'highlanderoutfitwomen', 'shepherdoutfitmen', 'shepherdoutfitwomen', 'cracowmen', 'cracowwomen', 'cracoweastmen', 'cracoweastwomen', 'lachymen', 'lachywomen', 'lowiczmen', 'lowiczwomen', 'zywiecmen', 'zywiecwomen'));
    }

    public function create(Request $request)
    {
        if($request->table == 'Highlanderoutfitman'){
            //dump('hello Highlanderoutfitman');
            return view('backend.create', ['table'=> 'Highlanderoutfitman']);
        }
        elseif($request->table == 'Highlanderoutfitwoman') {
            return view('backend.create', ['table'=> 'Highlanderoutfitwoman']);
        }
        elseif($request->table == 'Shepherdoutfitman') {
            return view('backend.create', ['table'=> 'Shepherdoutfitman']);
        }
        elseif($request->table == 'Shepherdoutfitwoman') {
            return view('backend.create', ['table'=> 'Shepherdoutfitwoman']);
        }
        elseif($request->table == 'Cracowman') {
            return view('backend.create', ['table'=> 'Cracowman']);
        }
        elseif($request->table == 'Cracowwoman') {
            return view('backend.create', ['table'=> 'Cracowwoman']);
        }
        elseif($request->table == 'Cracoweastman') {
            return view('backend.create', ['table'=> 'Cracoweastman']);
        }
        elseif($request->table == 'Cracoweastwoman') {
            return view('backend.create', ['table'=> 'Cracoweastwoman']);
        }
        elseif($request->table == 'Lachyman') {
            return view('backend.create', ['table'=> 'Lachyman']);
        }
        elseif($request->table == 'Lachywoman') {
            return view('backend.create', ['table'=> 'Lachywoman']);
        }
        elseif($request->table == 'Lowiczman') {
            return view('backend.create', ['table'=> 'Lowiczman']);
        }
        elseif($request->table == 'Lowiczwoman') {
            return view('backend.create', ['table'=> 'Lowiczwoman']);
        }
        elseif($request->table == 'Zywiecman') {
            return view('backend.create', ['table'=> 'Zywiecman']);
        }
        elseif($request->table == 'Zywiecwoman') {
            return view('backend.create', ['table'=> 'Zywiecwoman']);
        }
        else {
            dump('ERROR');
        }
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:3',
            'quantity' => 'required',
            ]);

        if($request->table == 'Highlanderoutfitman'){
            //dump('helloAdminStore');
            $highlanderoutfitman = new Highlanderoutfitman;
            $highlanderoutfitman->name = $request->name;
            $highlanderoutfitman->quantity = $request->quantity;
            $highlanderoutfitman->user_id = $request->user()->id;
            $highlanderoutfitman->save();
        }
        elseif($request->table == 'Highlanderoutfitwoman'){
            $highlanderoutfitwoman = new Highlanderoutfitwoman;
            $highlanderoutfitwoman->name = $request->name;
            $highlanderoutfitwoman->quantity = $request->quantity;
            $highlanderoutfitwoman->user_id = $request->user()->id;
            $highlanderoutfitwoman->save();
        }
        elseif($request->table == 'Shepherdoutfitman'){
            $shepherdoutfitman = new Shepherdoutfitman;
            $shepherdoutfitman->name = $request->name;
            $shepherdoutfitman->quantity = $request->quantity;
            $shepherdoutfitman->user_id = $request->user()->id;
            $shepherdoutfitman->save();
        }
        elseif($request->table == 'Shepherdoutfitwoman'){
            $shepherdoutfitwoman = new Shepherdoutfitwoman;
            $shepherdoutfitwoman->name = $request->name;
            $shepherdoutfitwoman->quantity = $request->quantity;
            $shepherdoutfitwoman->user_id = $request->user()->id;
            $shepherdoutfitwoman->save();
        }
        elseif($request->table == 'Cracowman'){
            $cracowman = new Cracowman;
            $cracowman->name = $request->name;
            $cracowman->quantity = $request->quantity;
            $cracowman->user_id = $request->user()->id;
            $cracowman->save();
        }
        elseif($request->table == 'Cracowwoman'){
            $cracowwoman = new Cracowwoman;
            $cracowwoman->name = $request->name;
            $cracowwoman->quantity = $request->quantity;
            $cracowwoman->user_id = $request->user()->id;
            $cracowwoman->save();
        }
        elseif($request->table == 'Cracoweastman'){
            $cracoweastman = new Cracoweastman;
            $cracoweastman->name = $request->name;
            $cracoweastman->quantity = $request->quantity;
            $cracoweastman->user_id = $request->user()->id;
            $cracoweastman->save();
        }
        elseif($request->table == 'Cracoweastwoman'){
            $cracoweastwoman = new Cracoweastwoman;
            $cracoweastwoman->name = $request->name;
            $cracoweastwoman->quantity = $request->quantity;
            $cracoweastwoman->user_id = $request->user()->id;
            $cracoweastwoman->save();
        }
        elseif($request->table == 'Lachyman'){
            $lachyman = new Lachyman;
            $lachyman->name = $request->name;
            $lachyman->quantity = $request->quantity;
            $lachyman->user_id = $request->user()->id;
            $lachyman->save();
        }
        elseif($request->table == 'Lachywoman'){
            $lachywoman = new Lachywoman;
            $lachywoman->name = $request->name;
            $lachywoman->quantity = $request->quantity;
            $lachywoman->user_id = $request->user()->id;
            $lachywoman->save();
        }
        elseif($request->table == 'Lowiczman'){
            $lowiczman = new Lowiczman;
            $lowiczman->name = $request->name;
            $lowiczman->quantity = $request->quantity;
            $lowiczman->user_id = $request->user()->id;
            $lowiczman->save();
        }
        elseif($request->table == 'Lowiczwoman'){
            $lowiczwoman = new Lowiczwoman;
            $lowiczwoman->name = $request->name;
            $lowiczwoman->quantity = $request->quantity;
            $lowiczwoman->user_id = $request->user()->id;
            $lowiczwoman->save();
        }
        elseif($request->table == 'Zywiecman'){
            $zywiecman = new Zywiecman;
            $zywiecman->name = $request->name;
            $zywiecman->quantity = $request->quantity;
            $zywiecman->user_id = $request->user()->id;
            $zywiecman->save();
        }
        elseif($request->table == 'Zywiecwoman'){
            $zywiecwoman = new Zywiecwoman;
            $zywiecwoman->name = $request->name;
            $zywiecwoman->quantity = $request->quantity;
            $zywiecwoman->user_id = $request->user()->id;
            $zywiecwoman->save();
        }
        else{
            //dump('ERROR SAVE');
            Session::flash('message', 'Save unsuccessfully!');
            Session::flash('alert-class', 'alert-danger');
            return redirect(route('adminHome'));
        }
        Session::flash('message', 'Save successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect(route('adminHome'));

    }

    public function show($id, Request $request)
    {
        if($request->table == 'Highlanderoutfitman'){
            $highlanderoutfitman = Highlanderoutfitman::findOrFail($id);
            $table = 'Highlanderoutfitman';
            return view('backend.show', compact('highlanderoutfitman', 'table'));
        }
        elseif($request->table == 'Highlanderoutfitwoman') {
            $highlanderoutfitwoman = Highlanderoutfitwoman::findOrFail($id);
            $table = 'Highlanderoutfitwoman';
            return view('backend.show', compact('highlanderoutfitwoman', 'table'));
        }
        elseif($request->table == 'Shepherdoutfitman') {
            $shepherdoutfitman = Shepherdoutfitman::findOrFail($id);
            $table = 'Shepherdoutfitman';
            return view('backend.show', compact('shepherdoutfitman', 'table'));
        }
        elseif($request->table == 'Shepherdoutfitwoman') {
            $shepherdoutfitwoman = Shepherdoutfitwoman::findOrFail($id);
            $table = 'Shepherdoutfitwoman';
            return view('backend.show', compact('shepherdoutfitwoman', 'table'));
        }
        elseif($request->table == 'Cracowman') {
            $cracowman = Cracowman::findOrFail($id);
            $table = 'Cracowman';
            return view('backend.show', compact('cracowman', 'table'));
        }
        elseif($request->table == 'Cracowwoman') {
            $cracowwoman = Cracowwoman::findOrFail($id);
            $table = 'Cracowwoman';
            return view('backend.show', compact('cracowwoman', 'table'));
        }
        elseif($request->table == 'Cracoweastman') {
            $cracoweastman = Cracoweastman::findOrFail($id);
            $table = 'Cracoweastman';
            return view('backend.show', compact('cracoweastman', 'table'));
        }
        elseif($request->table == 'Cracoweastwoman') {
            $cracoweastwoman = Cracoweastwoman::findOrFail($id);
            $table = 'Cracoweastwoman';
            return view('backend.show', compact('cracoweastwoman', 'table'));
        }
        elseif($request->table == 'Lachyman') {
            $lachyman = Lachyman::findOrFail($id);
            $table = 'Lachyman';
            return view('backend.show', compact('lachyman', 'table'));
        }
        elseif($request->table == 'Lachywoman') {
            $lachywoman = Lachywoman::findOrFail($id);
            $table = 'Lachywoman';
            return view('backend.show', compact('lachywoman', 'table'));
        }
        elseif($request->table == 'Lowiczman') {
            $lowiczman = Lowiczman::findOrFail($id);
            $table = 'Lowiczman';
            return view('backend.show', compact('lowiczman', 'table'));
        }
        elseif($request->table == 'Lowiczwoman') {
            $lowiczwoman = Lowiczwoman::findOrFail($id);
            $table = 'Lowiczwoman';
            return view('backend.show', compact('lowiczwoman', 'table'));
        }
        elseif($request->table == 'Zywiecman') {
            $zywiecman = Zywiecman::findOrFail($id);
            $table = 'Zywiecman';
            return view('backend.show', compact('zywiecman', 'table'));
        }
        elseif($request->table == 'Zywiecwoman') {
            $zywiecwoman = Zywiecwoman::findOrFail($id);
            $table = 'Zywiecwoman';
            return view('backend.show', compact('zywiecwoman', 'table'));
        }
        else {
            dump('ERROR SHOW');
        }
    }

    public function edit($id, Request $request)
    {
        if($request->table == 'Highlanderoutfitman'){
            $highlanderoutfitman = Highlanderoutfitman::find($id);
            $table = 'Highlanderoutfitman';
            return view('backend.edit', compact('highlanderoutfitman', 'table'));
        }
        elseif($request->table == 'Highlanderoutfitwoman'){
            $highlanderoutfitwoman = Highlanderoutfitwoman::find($id);
            $table = 'Highlanderoutfitwoman';
            return view('backend.edit', compact('highlanderoutfitwoman', 'table'));
        }
        elseif($request->table == 'Shepherdoutfitman'){
            $shepherdoutfitman = Shepherdoutfitman::find($id);
            $table = 'Shepherdoutfitman';
            return view('backend.edit', compact('shepherdoutfitman', 'table'));
        }
        elseif($request->table == 'Shepherdoutfitwoman'){
            $shepherdoutfitwoman = Shepherdoutfitwoman::find($id);
            $table = 'Shepherdoutfitwoman';
            return view('backend.edit', compact('shepherdoutfitwoman', 'table'));
        }
        elseif($request->table == 'Cracowman'){
            $cracowman = Cracowman::find($id);
            $table = 'Cracowman';
            return view('backend.edit', compact('cracowman', 'table'));
        }
        elseif($request->table == 'Cracowwoman'){
            $cracowwoman = Cracowwoman::find($id);
            $table = 'Cracowwoman';
            return view('backend.edit', compact('cracowwoman', 'table'));
        }
        elseif($request->table == 'Cracoweastman'){
            $cracoweastman = Cracoweastman::find($id);
            $table = 'Cracoweastman';
            return view('backend.edit', compact('cracoweastman', 'table'));
        }
        elseif($request->table == 'Cracoweastwoman'){
            $cracoweastwoman = Cracoweastwoman::find($id);
            $table = 'Cracoweastwoman';
            return view('backend.edit', compact('cracoweastwoman', 'table'));
        }
        elseif($request->table == 'Lachyman'){
            $lachyman = Lachyman::find($id);
            $table = 'Lachyman';
            return view('backend.edit', compact('lachyman', 'table'));
        }
        elseif($request->table == 'Lachywoman'){
            $lachywoman = Lachywoman::find($id);
            $table = 'Lachywoman';
            return view('backend.edit', compact('lachywoman', 'table'));
        }
        elseif($request->table == 'Lowiczman'){
            $lowiczman = Lowiczman::find($id);
            $table = 'Lowiczman';
            return view('backend.edit', compact('lowiczman', 'table'));
        }
        elseif($request->table == 'Lowiczwoman'){
            $lowiczwoman = Lowiczwoman::find($id);
            $table = 'Lowiczwoman';
            return view('backend.edit', compact('lowiczwoman', 'table'));
        }
        elseif($request->table == 'Zywiecman'){
            $zywiecman = Zywiecman::find($id);
            $table = 'Zywiecman';
            return view('backend.edit', compact('zywiecman', 'table'));
        }
        elseif($request->table == 'Zywiecwoman'){
            $zywiecwoman = Zywiecwoman::find($id);
            $table = 'Zywiecwoman';
            return view('backend.edit', compact('zywiecwoman', 'table'));
        }
        else {
            dump('ERROR EDIT');
        }
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'quantity' => 'required',
            ]);

        if($request->table == 'Highlanderoutfitman'){
            $highlanderoutfitman = Highlanderoutfitman::find($id);
            $highlanderoutfitman->name = $request->name;
            $highlanderoutfitman->quantity = $request->quantity;
            $highlanderoutfitman->user_id = $request->user()->id;
            $highlanderoutfitman->save();
        }
        elseif($request->table == 'Highlanderoutfitwoman'){
            $highlanderoutfitwoman = Highlanderoutfitwoman::find($id);
            $highlanderoutfitwoman->name = $request->name;
            $highlanderoutfitwoman->quantity = $request->quantity;
            $highlanderoutfitwoman->user_id = $request->user()->id;
            $highlanderoutfitwoman->save();
        }
        elseif($request->table == 'Shepherdoutfitman'){
            $shepherdoutfitman = Shepherdoutfitman::find($id);
            $shepherdoutfitman->name = $request->name;
            $shepherdoutfitman->quantity = $request->quantity;
            $shepherdoutfitman->user_id = $request->user()->id;
            $shepherdoutfitman->save();
        }
        elseif($request->table == 'Shepherdoutfitwoman'){
            $shepherdoutfitwoman = Shepherdoutfitwoman::find($id);
            $shepherdoutfitwoman->name = $request->name;
            $shepherdoutfitwoman->quantity = $request->quantity;
            $shepherdoutfitwoman->user_id = $request->user()->id;
            $shepherdoutfitwoman->save();
        }
        elseif($request->table == 'Cracowman'){
            $cracowman = Cracowman::find($id);
            $cracowman->name = $request->name;
            $cracowman->quantity = $request->quantity;
            $cracowman->user_id = $request->user()->id;
            $cracowman->save();
        }
        elseif($request->table == 'Cracowwoman'){
            $cracowwoman = Cracowwoman::find($id);
            $cracowwoman->name = $request->name;
            $cracowwoman->quantity = $request->quantity;
            $cracowwoman->user_id = $request->user()->id;
            $cracowwoman->save();
        }
        elseif($request->table == 'Cracoweastman'){
            $cracoweastman = Cracoweastman::find($id);
            $cracoweastman->name = $request->name;
            $cracoweastman->quantity = $request->quantity;
            $cracoweastman->user_id = $request->user()->id;
            $cracoweastman->save();
        }
        elseif($request->table == 'Cracoweastwoman'){
            $cracoweastwoman = Cracoweastwoman::find($id);
            $cracoweastwoman->name = $request->name;
            $cracoweastwoman->quantity = $request->quantity;
            $cracoweastwoman->user_id = $request->user()->id;
            $cracoweastwoman->save();
        }
        elseif($request->table == 'Lachyman'){
            $lachyman = Lachyman::find($id);
            $lachyman->name = $request->name;
            $lachyman->quantity = $request->quantity;
            $lachyman->user_id = $request->user()->id;
            $lachyman->save();
        }
        elseif($request->table == 'Lachywoman'){
            $lachywoman = Lachywoman::find($id);
            $lachywoman->name = $request->name;
            $lachywoman->quantity = $request->quantity;
            $lachywoman->user_id = $request->user()->id;
            $lachywoman->save();
        }
        elseif($request->table == 'Lowiczman'){
            $lowiczman = Lowiczman::find($id);
            $lowiczman->name = $request->name;
            $lowiczman->quantity = $request->quantity;
            $lowiczman->user_id = $request->user()->id;
            $lowiczman->save();
        }
        elseif($request->table == 'Lowiczwoman'){
            $lowiczwoman = Lowiczwoman::find($id);
            $lowiczwoman->name = $request->name;
            $lowiczwoman->quantity = $request->quantity;
            $lowiczwoman->user_id = $request->user()->id;
            $lowiczwoman->save();
        }
        elseif($request->table == 'Zywiecman'){
            $zywiecman = Zywiecman::find($id);
            $zywiecman->name = $request->name;
            $zywiecman->quantity = $request->quantity;
            $zywiecman->user_id = $request->user()->id;
            $zywiecman->save();
        }
        elseif($request->table == 'Zywiecwoman'){
            $zywiecwoman = Zywiecwoman::find($id);
            $zywiecwoman->name = $request->name;
            $zywiecwoman->quantity = $request->quantity;
            $zywiecwoman->user_id = $request->user()->id;
            $zywiecwoman->save();
        }
        else{
            //dump('ERROR UPDATE');
            Session::flash('message', 'Delete unsuccessfully!');
            Session::flash('alert-class', 'alert-danger');
            return redirect(route('shop.index'));
        }
        Session::flash('message', 'Update successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect(route('shop.index'));
    }

    public function delete($id, Request $request)
    {
        if($request->table == 'Highlanderoutfitman'){
            //dump('hello Highlanderoutfitman show');
            $highlanderoutfitman = Highlanderoutfitman::find($id);
            //dump($id);
            Highlanderoutfitman::where('id', $id)->delete();
        }
        elseif($request->table == 'Highlanderoutfitwoman'){
            $highlanderoutfitwoman = Highlanderoutfitwoman::find($id);
            Highlanderoutfitwoman::where('id', $id)->delete();
        }
        elseif($request->table == 'Shepherdoutfitman'){
            Shepherdoutfitman::where('id', $id)->delete();
        }
        elseif($request->table == 'Shepherdoutfitwoman'){
            Shepherdoutfitwoman::where('id', $id)->delete();
        }
        elseif($request->table == 'Cracowman'){
            Cracowman::where('id', $id)->delete();
        }
        elseif($request->table == 'Cracowwoman'){
            Cracowwoman::where('id', $id)->delete();
        }
        elseif($request->table == 'Cracoweastman'){
            Cracoweastman::where('id', $id)->delete();
        }
        elseif($request->table == 'Cracoweastwoman'){
            Cracoweastwoman::where('id', $id)->delete();
        }
        elseif($request->table == 'Lachyman'){
            Lachyman::where('id', $id)->delete();
        }
        elseif($request->table == 'Lachywoman'){
            Lachywoman::where('id', $id)->delete();
        }
        elseif($request->table == 'Lowiczman'){
            Lowiczman::where('id', $id)->delete();
        }
        elseif($request->table == 'Lowiczwoman'){
            Lowiczwoman::where('id', $id)->delete();
        }
        elseif($request->table == 'Zywiecman'){
            Zywiecman::where('id', $id)->delete();
        }
        elseif($request->table == 'Zywiecwoman'){
            Zywiecwoman::where('id', $id)->delete();
        }
        else{
            //dump('ERROR DELETE');
            Session::flash('message', 'Delete unsuccessfully!');
            Session::flash('alert-class', 'alert-danger');
            return redirect()->back();
        }
        Session::flash('message', 'Delete successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->back();
    }
    
    public function myobjects(Request $request)
    {
        $objects = $this->bR->getMyObjects($request);
        //dd($objects);

        return view('backend.myobjects',['objects'=>$objects]);
    }
    
    public function profile(Request $request)
    {
        if ($request->isMethod('post')) 
        {

            $user = $this->bG->saveUser($request);
            
            if ($request->hasFile('userPicture'))
            {
                $path = $request->file('userPicture')->store('users', 'public');
                //dd($path);

                if (count($user->photos) != 0)
                {
                    $photo = $this->bR->getPhoto($user->photos->first()->id);

                    Storage::disk('public')->delete($photo->storagepath);
                    $photo->path = $path;
                    
                    $this->bR->updateUserPhoto($user,$photo);
                    
                } 
                else
                {
                    $this->bR->createUserPhoto($user,$path);
                }
                
            }

            return redirect()->back();
        }

        return view('backend.profile',['user'=>Auth::user()]);
    }

    public function deletePhoto($id)
    {

        $photo = $this->bR->getPhoto($id);
        
        $this->authorize('checkOwner', $photo);
        
        $path = $this->bR->deletePhoto($photo);
        
        Storage::disk('public')->delete($path);

        return redirect()->back();
    }

    public function saveobject($id = null, Request $request)
    {
        if($request->isMethod('post'))
        {
            if($id)
            $this->authorize('checkOwner', $this->bR->getObject($id));

            $this->bG->saveObject($id, $request);

            if($id)
            return redirect()->back();
            else
            return redirect()->route('myObjects');

        }

        if($id)
        return view('backend.saveobject',['object'=>$this->bR->getObject($id)]);
        else
        return view('backend.saveobject');
    }

    public function deleteObject($id)
    {
        $this->authorize('checkOwner', $this->bR->getObject($id));
        
        $this->bR->deleteObject($id);
               
        return redirect()->back();
    }
    
    public function savePerson($id = null, Request $request)
    {

        if($request->isMethod('post'))
        {
            if($id) // editing
            $this->authorize('checkOwner', $this->bR->getPerson($id));
            else // adding a new person
            $this->authorize('checkOwner', $this->bR->getObject($request->input('object_id')));   

            $this->bG->savePerson($id, $request);

            if($id)
            return redirect()->back();
            else
            return redirect()->route('myObjects');
        }

        if($id)
        return view('backend.saveperson',['person'=>$this->bR->getPerson($id)]);
        else
        return view('backend.saveperson',['object_id'=>$request->input('object_id')]);
    }
    
    public function deletePerson($id)
    {
        $person =  $this->bR->getPerson($id);
        
        $this->authorize('checkOwner', $person);

        $this->bR->deletePerson($person);

        return redirect()->back();
    }

    public function showPerson($id)
    {
        $person = Person::findOrFail($id);
        return view('backend.showperson', compact('person'));
    }

    public function showTeam($id)
    {
        $object = TeamObject::findOrFail($id);
        return view('backend.showteam', compact('object'));
    }

}