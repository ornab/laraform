@extends('layouts.app')





@section('content')



      
      
      
      <h1>
      
      <a href="{{route('posts.edit',$post->id)}}">
      
      {{$post->title}}
       
      {{ '&amp;' }}
      
      {{$post->content}}
      
      </a>
      
      </h1>
      
      



@endsection

