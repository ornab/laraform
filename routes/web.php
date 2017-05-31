
<?php

use App\User;
use Carbon\carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| CRUD App with form & validation
|--------------------------------------------------------------------------
|
*/


Route::group(['middleware'=>'web'], function(){
    
    Route::resource('/posts', 'PostsController');
    
    
//Dates
    
    Route::get('/date', function(){
        
        
        $date = new DateTime('+1 week');
        
        echo $date->format('m-d-Y');
          
        echo '<br> <br>';
        
    //now with carbon
        
        
        echo carbon::now()->addDays(10)->diffForHumans();
        
        
        echo '<br> <br>';
        
        
        echo carbon::now()->yesterday()->diffForHumans();
    });
    

// Accessors  (Manipulate data before you fetching it from the database -> It doesn't change the main value stored in DB )
    
    Route::get('/getname', function(){
        
        $user = User::find(1);
        
        echo $user->name;
        
        
    });
    
// Mutators (Manipulating data before you saving it to the database -> The changed value stores in th DB )
    
    Route::get('/setname', function(){
        
        $user = User::find(1);
        
        $user->name = "ornab";
        
        $user->save();
        
    });
    
    
    
    
});

