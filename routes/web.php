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

//default route setting
Route::get('/', function () {    
    return view('welcome');
});


//posts
Route::get('/posts/{v}', 'PostsController@index');


Route::get('/ged', function () {      
    //testing routes
    return 'hello ged';
});





//i.e http://localhost/firstlaravelapp/public/post/2
Route::get('/post/{id}', function ($id) {    
    return "this is post number ".$id;
});


//http://localhost/firstlaravelapp/public/post/2/ted
Route::get('/post/{id}/{name}', function ($id,$name) {    
    return "this is post number ".$id. ' name = '.$name ;
});

//alias route
//http://localhost/firstlaravelapp/public/admin/posts/example
/*Route::get('admin/posts/example', array('as'=>'admin.home',function () {    
    
    $url=route('admin.home');

    return 'this url is '.$url;
}));*/

