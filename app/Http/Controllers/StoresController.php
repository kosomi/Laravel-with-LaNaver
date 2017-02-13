<?php

namespace App\Http\Controllers;

use App\Articles; 
use App\Comments;
use App\Stores;
use App\Replys;
use App\Http\Controllers\Controllers;
use Carbon\Carbon;   
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Input;

class StoresController extends Controller
{ 
    public function index()
    {
        $stores = Stores::all();
        return view('stores.index', compact('stores')); 
    } 
 
    public function create()
    {
        return view('stores.create');
    } 

    public function store(Request $request)
    {
        $user = new image;
        $user->user     = Auth::user()->user;
        $user->name     = Input::get('name');
        $user->phone    = Input::get('phone');
        $user->address  = Input::get('address');
        $user->lng      = Input::get('lng');
        $user->lat      = Input::get('lat');
        $user->memo     = Input::get('memo');   

        if(Input::hasFile('image')){
            $file=Input::file('image');
            $file->move(public_path(). '/images', $file->getClientOriginalName());
            $user->image = $file->getClientOriginalName();
        } 
        return redirect('stores');
    }

    public function show($id){
        $stores = Stores::all();
        $store = Stores::findOrFail($id);
        $comments = Comments::where('parent_id', '=', $id)->get();
        $replies = Replys::all();
        return view('stores.show', compact('stores', 'store'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
