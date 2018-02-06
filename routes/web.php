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

Route::get('/ged', function () {  
    
    //testing routes
    return 'hello ged';
});


//default route setting
Route::get('/', function () {    
    return view('welcome');
});


//i.e http://localhost/firstlaravelapp/public/post/2
Route::get('/post/{id}', function ($id) {    
    return "this is post number ".$id;
});


//http://localhost/firstlaravelapp/public/post/2/ted
Route::get('/post/{id}/{name}', function ($id,$name) {    
    return "this is post number ".$id. ' name = '.$name ;
});

