<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;
use App\Post;
use App\User;

class PostsController extends Controller
{
     public function create(){
         
         return view('posts.create');
         
     }
    
    
    
    public function store(CreatePostRequest $request){
        
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
        
        
        
//        $this->validate($request, [
//            
//            'title' => 'required|min:4',
//            'content' => 'required|min:10'
//            
//            
//        ]);
        
         
        
        Post::create($request->all());
        
        return redirect('/posts');
    }
    
    
    
    public function index(){
        
        
        $posts = Post::all();
        
        
        return view('posts.index', compact('posts'));
        
    }
    
    public function update(Request $request, $id){
        
        
        
        $post = Post::findOrFail($id);
        
        $post->update($request->all());
        
        return redirect('/posts');
        
    }
    
    public function edit($id){
        
        $post = Post::findOrFail($id);
        
        return view('posts.edit', compact('post'));
        
    }
    
    public function show($id){
        
        $post = Post::findOrFail($id);
        
        return view('posts.show', compact('post'));
        
    }
    
    public function destroy($id){
        
        $post = Post::whereId($id)->delete();
        
        return redirect('/posts');
        
    }
    
    
    
    
}
