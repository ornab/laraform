@extends('layouts.app')





@section('content')


      <h1>Create Post</h1>
      
<!--     <form method="post" action="/posts">-->
         
         <div class="container">
             
                 <div class="row">
                   
                   <div class="col-md-12">
                     
                     <div class="form-group">
         
         
                {!! Form::open(['method'=>'POST', 'action'=> 'PostsController@store']) !!}
         
               {!! csrf_field() !!}
         
          
             
             
             {!! Form::label('title', 'Title:') !!} <br>
             {!! Form::text('title', null , ['size' =>'33'], ['class'=>'form-control'] ) !!} <br> <br>
             {!! Form::label('content', 'Content:') !!} <br>
             {!! Form::textarea('content', null ,['size' =>'30x3'], ['class'=>'form-control'] ) !!} <br> <br> 
             
             {!! Form::submit('Create Post', ['class'=>'btn btn-primary'] ) !!} 
             
            {!! Form::close() !!} 
            
            
            </div>
         </div>
     </div>
</div>
         
         
         
         @if(count($errors) > 0)
          
            
            <div class="alert alert-danger"> 
            
              <ul>
                  
                  
                  @foreach($errors->all() as $error)
                  
                       
                       <li> {{ $error }} </li>
                    
                    
                  @endforeach
                  
                  
              </ul>
          
          </div>
          
          
          
          @endif
           
         
         
         
         
         
        
     
    




@endsection


