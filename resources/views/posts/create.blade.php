@extends('layouts.app')





@section('content')


      <h1>Create Post</h1>
      
     <form method="post" action="/posts">
         
         
         {!! csrf_field() !!}
         
         <label>Title</label>
         
         <input type="text" name="title" placeholder="Enter Title">
         <input type="textarea" name="content" placeholder="Enter Content">
         
         <input type="submit" name="submit" value="Submit">
         
         
         
     </form>





@endsection


