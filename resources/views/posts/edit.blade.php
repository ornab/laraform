@extends('layouts.app')





@section('content')

    <h1>Edit Post</h1>

     <form method="post" action="/posts/{{$post->id}}">
         
         
         {!! csrf_field() !!}
         
         
         <input type="hidden" name="_method" value="PUT">
         
         <label>Title</label>
         
         <input type="text" name="title" placeholder="Enter Title" value="{{$post->title}}">
         <input type="textarea" name="content" placeholder="Enter Content" value="{{$post->content}}">
         
         <input type="submit" name="submit" value="Update">
         
         
         
     </form>


     <form method="post"  action="/posts/{{$post->id}}">
        
         {!! csrf_field() !!}
         
         <input type="hidden" name="_method" value="DELETE">
         
         <input type="submit"  name="submit" value="Delete" >
         
         
         
     </form>


@endsection

