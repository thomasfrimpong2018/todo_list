<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Item;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=auth()->user()->items;
        return view('home')->with('items',$items);
    }

    public function postIndex(Request $request){
        
        $id=$request->input('id');
        $user_id=auth()->user()->id;
        $item=Item::findOrFail($id);

        //condition to check for unauthorised checking
        if($user_id==$item->user_id){

        $item->mark();
        }
        return redirect('/');
    }

    public function createTask(){

        return view('newtask');

    }

    public function saveTask(Request $request){

       //validating data inputs
       $this->validate($request,[
        'task'=>'required|min:3',
        
        
       ]);
      
        $item=new Item;
        $item->user_id=auth()->user()->id;
        $item->name=$request->input('task');
        $item->done=false;
        $item->save();

     return redirect('/');
        
    }
}
