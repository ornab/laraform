@extends('layouts.app')





@section('content')



     <form method="post" action="/posts">
         
         
         {!! csrf_field() !!}
         
         <label>Title</label>
         
         <input type="text" name="title" placeholder="Enter Title">
         
         <input type="submit" name="submit" value="Submit">
         
         
         
     </form>







@yield('footer')
