<?php

namespace App\Http\Controllers;

use App\Articles; 
use App\Comments;
use App\Replys;
use App\Http\Controllers\Controllers;
use Carbon\Carbon;   
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class ArticlesController extends Controller
{

    public function index(){
     $articles = Articles::all();
     return view('articles.index', compact('articles'));
    }  

    public function show($id){
        $articles = Articles::all();
        $article = Articles::findOrFail($id);
        $comments = Comments::where('parent_id', '=', $id)->get();
        $replies = Replys::all();
        return view('articles.show', compact('article', 'articles','comments', 'id', 'replies'));
    }

    public function create(){
        return view('articles.create');
    }

    public function store(Request $request){
        $input = $request->all();  
        $input['user'] = Auth::user()->name;
        Articles::create($input); 
        return redirect('/');
    } 

    public function edit($id){ 
        $article = Articles::findOrFail($id);
        return view('articles.edit', compact('article'));
    }  

    public function update($id, Request $request){
        $article = Articles::findOrFail($id); 
        $article->update($request->all());
        return redirect('/show/'.$id); 
    } 

    public function destroy($id)
    {
        Articles::destroy($id); // 1 way 
        return redirect('/'); 
    } 

    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

}
