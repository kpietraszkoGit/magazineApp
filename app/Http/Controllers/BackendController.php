<?php

namespace App\Http\Controllers;

use App\Product;
use App\Highlanderoutfitman;
use App\Highlanderoutfitwoman;
use App\Shepherdoutfitman;
use App\Shepherdoutfitwoman;
use App\Cracowman;
use App\Cracowwoman;
use App\Cracoweastman;
use App\Cracoweastwoman;
use App\Lachyman;
use App\Lachywoman;
use App\Lowiczman;
use App\Lowiczwoman;
use App\Zywiecman;
use App\Zywiecwoman;
//use App\Room;
//use App\{TouristObject,Reservation, City, User, Photo, Address, Article, Room, Notification};
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
        $this->bG = $backendGateway; //$bG
        $this->bR = $backendRepository; //$bR
    }

    public function index()
    {
        // $products = Product::all();
        // return view('backend.index', compact('products'));
        //przekazanie danych do wyświetlenia w widoku 
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
            //dump('hello Highlanderoutfitwoman');
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
            //dump('hello Lachyman');
            return view('backend.create', ['table'=> 'Lowiczman']);
        }
        elseif($request->table == 'Lowiczwoman') {
            //dump('hello Lachywoman');
            return view('backend.create', ['table'=> 'Lowiczwoman']);
        }
        elseif($request->table == 'Zywiecman') {
            //dump('hello Lachyman');
            return view('backend.create', ['table'=> 'Zywiecman']);
        }
        elseif($request->table == 'Zywiecwoman') {
            //dump('hello Lachywoman');
            return view('backend.create', ['table'=> 'Zywiecwoman']);
        }
        else {
            dump('ERROR');
        }
    }

    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'name' => 'required',
        //     'price' => 'required',
        //     ]);

        // // Metoda Nr 1
        // $product = new Product;
        // $product->name = $request->name;
        // $product->price = $request->price;
        // $product->save();

        // // Metoda Nr 2
        // // product::create($request->all());

        // return redirect(route('adminHome'));
        $this->validate($request,[
            'name' => 'required|min:3',
            'quantity' => 'required',
            ]);

        // Metoda Nr 1
        if($request->table == 'Highlanderoutfitman'){
            //dump('helloAdminStore');
            $highlanderoutfitman = new Highlanderoutfitman;
            $highlanderoutfitman->name = $request->name;
            $highlanderoutfitman->quantity = $request->quantity;
            $highlanderoutfitman->user_id = $request->user()->id;
            $highlanderoutfitman->save();
        }
        elseif($request->table == 'Highlanderoutfitwoman'){
            //dump('helloUserStore');
            $highlanderoutfitwoman = new Highlanderoutfitwoman;
            $highlanderoutfitwoman->name = $request->name;
            $highlanderoutfitwoman->quantity = $request->quantity;
            $highlanderoutfitwoman->user_id = $request->user()->id;
            $highlanderoutfitwoman->save();
        }
        elseif($request->table == 'Shepherdoutfitman'){
            //dump('helloUserStore');
            $shepherdoutfitman = new Shepherdoutfitman;
            $shepherdoutfitman->name = $request->name;
            $shepherdoutfitman->quantity = $request->quantity;
            $shepherdoutfitman->user_id = $request->user()->id;
            $shepherdoutfitman->save();
        }
        elseif($request->table == 'Shepherdoutfitwoman'){
            //dump('helloUserStore');
            $shepherdoutfitwoman = new Shepherdoutfitwoman;
            $shepherdoutfitwoman->name = $request->name;
            $shepherdoutfitwoman->quantity = $request->quantity;
            $shepherdoutfitwoman->user_id = $request->user()->id;
            $shepherdoutfitwoman->save();
        }
        elseif($request->table == 'Cracowman'){
            //dump('helloUserStore');
            $cracowman = new Cracowman;
            $cracowman->name = $request->name;
            $cracowman->quantity = $request->quantity;
            $cracowman->user_id = $request->user()->id;
            $cracowman->save();
        }
        elseif($request->table == 'Cracowwoman'){
            //dump('helloUserStore');
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
            dump('ERROR SAVE');
            Session::flash('message', 'Save unsuccessfully!');
            Session::flash('alert-class', 'alert-danger');
            return redirect(route('adminHome'));
        }
        // Metoda Nr 2
        //product::create($request->all());
        Session::flash('message', 'Save successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect(route('adminHome'));

    }

    public function show($id, Request $request)
    {
        // $product = Product::findOrFail($id);
        // return view('backend.show', compact('product'));
        
        //dump($id);
        if($request->table == 'Highlanderoutfitman'){
            //dump('hello Highlanderoutfitman show');
            $highlanderoutfitman = Highlanderoutfitman::findOrFail($id);
            $table = 'Highlanderoutfitman';
            return view('backend.show', compact('highlanderoutfitman', 'table'));
        }
        elseif($request->table == 'Highlanderoutfitwoman') {
            //dump('hello Highlanderoutfitwoman show');
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
        // $product = Product::find($id);
        // return view('backend.edit', compact('product'));
        // $highlanderoutfitman = Highlanderoutfitman::find($id);
        // $highlanderoutfitwoman = Highlanderoutfitwoman::find($id);
        // return view('backend.edit', compact('highlanderoutfitman', 'highlanderoutfitwomen'));

        if($request->table == 'Highlanderoutfitman'){
            //dump('hello Highlanderoutfitman show');
            $highlanderoutfitman = Highlanderoutfitman::find($id);
            $table = 'Highlanderoutfitman';
            return view('backend.edit', compact('highlanderoutfitman', 'table'));
        }
        elseif($request->table == 'Highlanderoutfitwoman'){
            //dump('hello Highlanderoutfitwoman show');
            $highlanderoutfitwoman = Highlanderoutfitwoman::find($id);
            $table = 'Highlanderoutfitwoman';
            return view('backend.edit', compact('highlanderoutfitwoman', 'table'));
        }
        elseif($request->table == 'Shepherdoutfitman'){
            //dump('hello Highlanderoutfitwoman show');
            $shepherdoutfitman = Shepherdoutfitman::find($id);
            $table = 'Shepherdoutfitman';
            return view('backend.edit', compact('shepherdoutfitman', 'table'));
        }
        elseif($request->table == 'Shepherdoutfitwoman'){
            //dump('hello Highlanderoutfitwoman show');
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
        // $this->validate($request,[
        //     'name' => 'required',
        //     'price' => 'required',
        //     ]);
        // $product = Product::find($id);
        // $product->name = $request->name;
        // $product->price = $request->price;
        // $product->save();  
        // return redirect(route('shop.index'));

        $this->validate($request,[
            'name' => 'required',
            'quantity' => 'required',
            ]);
        //dump($id);
        // Metoda Nr 1
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
            dump('ERROR UPDATE');
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
        //dump($request->table);
        if($request->table == 'Highlanderoutfitman'){
            dump('hello Highlanderoutfitman show');
            $highlanderoutfitman = Highlanderoutfitman::find($id);
            dump($id);
            Highlanderoutfitman::where('id', $id)->delete();
        }
        elseif($request->table == 'Highlanderoutfitwoman'){
            dump('hello Highlanderoutfitwoman show');
            $highlanderoutfitwoman = Highlanderoutfitwoman::find($id);
            dump($id);
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
            dump('ERROR DELETE');
            Session::flash('message', 'Delete unsuccessfully!');
            Session::flash('alert-class', 'alert-danger');
            return redirect()->back();
        }
        Session::flash('message', 'Delete successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->back();
    }

    /* Lecture 6 */
    // public function cities()
    // {
    //     return view('backend.cities');
    // }
    
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
                $path = $request->file('userPicture')->store('users', 'public'); /* Lecture 40 */
                //dd($path);

                /* Lecture 40 */
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

        $photo = $this->bR->getPhoto($id); /* Lecture 40 */
        
        $this->authorize('checkOwner', $photo);
        
        $path = $this->bR->deletePhoto($photo); /* Lecture 40 */
        
        Storage::disk('public')->delete($path); /* Lecture 40 */

        return redirect()->back();
    }

    /* zapisywanie obiektu/teamu*/
    public function saveobject($id = null, Request $request)
    {
        /* zapis edytowanego obiektu */
        if($request->isMethod('post'))
        {
            if($id)
            $this->authorize('checkOwner', $this->bR->getObject($id));//autoryzacja

            $this->bG->saveObject($id, $request);

            //if($id)
            //return redirect()->back();
            //return redirect()->route('myObjects');
            //else
            return redirect()->route('myObjects');

        }


        /*edycja*/
        if($id)
        //return view('backend.saveobject',['object'=>$this->bR->getObject($id),'cities'=>$this->bR->getCities()]);
        return view('backend.saveobject',['object'=>$this->bR->getObject($id)]);
        else/*dodawanie*/
        //return view('backend.saveobject',['cities'=>$this->bR->getCities()]);
        return view('backend.saveobject');
    }

    public function deleteObject($id)
    {
        $this->authorize('checkOwner', $this->bR->getObject($id));
        
        $this->bR->deleteObject($id);
               
        return redirect()->back();
    
    }
    
    public function saveRoom($id = null, Request $request)
    {

        if($request->isMethod('post'))
        {
            if($id) // editing room
            $this->authorize('checkOwner', $this->bR->getRoom($id));
            else // adding a new room
            $this->authorize('checkOwner', $this->bR->getObject($request->input('object_id')));   

            $this->bG->saveRoom($id, $request);
            
            //if($id)
            //return redirect()->back();
            //return redirect()->route('myObjects');
            //else
            return redirect()->route('myObjects');

        }

        if($id)
        return view('backend.saveroom',['room'=>$this->bR->getRoom($id)]);
        else
        return view('backend.saveroom',['object_id'=>$request->input('object_id')]);
    }
    
    public function deleteRoom($id)
    {
        $room =  $this->bR->getRoom($id);
        
        $this->authorize('checkOwner', $room);

        $this->bR->deleteRoom($room);

        return redirect()->back();
    }

    // public function deleteArticle($id)
    // {
    //     return 'to do';
    // }
    
    
    // /* Lecture 44 */
    // public function saveArticle($object_id = null)
    // {
    //     return 'to do';
    // }
}