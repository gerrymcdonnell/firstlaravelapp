<?php

//use the post model
use App\Post;

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
//************************************************************************ */
//default route setting
Route::get('/', function () {    
    return view('welcome');
});
//************************************************************************* */

//find
Route::get('/findwhere', function () {    
    $posts=Post::where('id',2)->orderBy('id','desc')->take(1)->get();

    return $posts;

});


Route::get('/findwhere/{id}', function ($id) {    
    $posts=Post::where('id',$id)->orderBy('id','desc')->take(1)->get();

    return $posts;

});



//get all
Route::get('/all', function () {    
    $posts=Post::all();

    foreach($posts as $post){
        return $post->title;
    }

});


//get id record 2
Route::get('/find', function () {    
    
    $post=Post::find(2);   
    return $post->title;       
});



//reading data
Route::get('/read', function () {    
    $results=DB::select('select * from posts where id=?',[1]);

    //loop records
    foreach($results as $post){
        return $post->title;
    }

    //var dump
    //return var_dump($results);

    return $results;
});


//update
Route::get('/update', function () {    
    $updated=DB::update(
        'update posts set title="update title" where id=?',[1]
    );

    return $updated;
});


//delete
Route::get('/delete', function () {    
    $deleted=DB::delete(
        'delete from posts where id=?',[1]
    );

    return $deleted;
});




//add crud for the controller
//Route::resource('posts','PostsController');


//insert query
Route::get('/insert', function () {      
    //DB::insert('insert into posts(title,content) values (?,?)',['php with lara','best thing ever']);

    DB::table('posts')->insert([
        'title' => 'PHP with Laravel',
        'content' => 'Laravel is the best thing to happen to PHP'
    ]);
});





//contact route
Route::get('/contact','PostsController@contact');

//posts
//http://localhost/firstlaravelapp/public/posts/qq
Route::get('/post/{id}/{name}', 'PostsController@show_post');


Route::get('/ged', function () {      
    //testing routes
    return 'hello ged';
});





//i.e http://localhost/firstlaravelapp/public/post/2
/*Route::get('/post/{id}', function ($id) {    
    return "this is post number ".$id;
});


//http://localhost/firstlaravelapp/public/post/2/ted
Route::get('/post/{id}/{name}', function ($id,$name) {    
    return "this is post number ".$id. ' name = '.$name ;
});*/

//alias route
//http://localhost/firstlaravelapp/public/admin/posts/example
/*Route::get('admin/posts/example', array('as'=>'admin.home',function () {    
    
    $url=route('admin.home');

    return 'this url is '.$url;
}));*/

