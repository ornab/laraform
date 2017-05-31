@extends('layouts.app')





@section('content')

    <h1>Edit Post</h1>

     <div class="container">
             
                 <div class="row">
                   
                   <div class="col-md-12">
                     
                     <div class="form-group">
         
         
                {!! Form::model($post, ['method'=>'PATCH', 'action'=> ['PostsController@update', $post->id]]) !!}
         
               {!! csrf_field() !!}
         
          
             
             
             {!! Form::label('title', 'Title:') !!} <br>
             {!! Form::text('title', null , ['size' =>'33'], ['class'=>'form-control'] ) !!} <br> <br>
             {!! Form::label('content', 'Content:') !!} <br>
             {!! Form::textarea('content', null ,['size' =>'30x3'], ['class'=>'form-control'] ) !!} <br> <br> 
             
             {!! Form::submit('Update Post', ['class'=>'btn btn-primary'] ) !!} 
              
             
            {!! Form::close() !!} 
            
            
            </div>
         </div>
     </div>
</div>
        
        
        <div class="container">
             
                 <div class="row">
                   
                   <div class="col-md-12">
                     
                     <div class="form-group">
        
        
                           {!! Form::model($post, ['method'=>'DELETE', 'action'=> ['PostsController@destroy', $post->id]]) !!}
         
                           {!! csrf_field() !!}
        
          
                            {!! Form::submit('Delete Post', ['class'=>'btn btn-danger'] ) !!}  
          
                             {!! Form::close() !!} 

             </div>
         </div>
     </div>
</div>
          
@endsection

