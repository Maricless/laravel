<?php

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

// Route::get('/', function () 
// {     $name = "梁";
//       $age = 17;
//       $sex = "男";
//       return view('welcome',compact('name','age','sex'));;
// });


// Route::get('/', 'WeController@index');


Route::get('/', function () 
{
    return view('one');
});




Route::get('view', function () 
{
      return 'good';
});




// Route::any('one', ['uses' => 'Controller2@one']);


Route::get('one', function () 
{     $name = "梁";
      $age = 17;
      $sex = "男";
      return view('welcome',compact('name','age','sex'));;
});




Route::get('greeting', function () 
{
    return view('greeting', ['name' => 'James']);
});



Route::get('create', 'ArticlesController@create');  



Route::get('post/create', 'PostController@create');



Route::post('post', 'PostController@store');