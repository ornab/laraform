<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostsController extends Controller
{
     public function create(){
         
         return view('posts.create');
         
     }
    
    
    
    public function store(Request $request){
        
    //    return $request->get('title');
        
       
        
        
//       $input =  $request->all();
//        
//       $input['title'] = $request->title;
//        
//       Post::create($request->all());    
        
        
//        $post = new Post;
//        
//        $post->title = $request->title;
//        
//        $post->save();
        
        
        Post::create($request->all());
        
        return redirect('/posts');
    }
    
    
    
    public function index(){
        
        return "Its Working Well!";
        
    }
    
    public function update(Request $request){
        
        
        
    }
    
    public function edit(Request $request){
        
        
        
    }
    
    public function show($id){
        
        
        
    }
    
    public function destroy(Request $request){
        
        
        
    }
    
    
    
    
}
