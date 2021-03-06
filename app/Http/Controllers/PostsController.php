<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts=Post::all();
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //use the create view html form version
        //return view('posts.create');

        //laravel collective ver
        return view('posts.create2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //create post with simple validation
    public function storeold(Request $request)
    {
        //validation rules, use pipe to add more
        $this->validate($request,[
                'title'=>'required|max:30',
                'content'=>'required'
            ]
        );
        //create post
        Post::create($request->all());
        return redirect('/posts');
    }

    //add post use custom class to validate
    public function store(CreatePostRequest $request)
    {
        $input=$request->all();

        if($file=$request->file('file')){
            $name=$file->getClientOriginalName();

            //will create an images folder in public folder
            $file->move('images',$name);

            $input['path']=$name;
        }

        Post::create($input);

        return redirect('/posts');

        /*$file=$request->file('file');
        echo $file->getClientOriginalName();*/

        //create post orignal fucntion
        /*Post::create($request->all());
        return redirect('/posts');*/
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post=Post::find($id);
        return view('posts.edit2',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $post=Post::find($id);
        $post->update($request->all());

        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Delete fucntion
    public function destroy($id)
    {
        //
        $post=Post::find($id);
        $post->delete();
        return redirect('/posts');
    }

    //custom action
    public function contact(){
        $people=['ted','james','bob'];
        
        return view('contact',compact('people'));        

    }

    //custom action
    public function show_post($id,$name){
        //pass data to view
        //return view('post')->with('id',$id);

        //for multiple params
        return view('post',compact(
            'id','name'
        ));
    }

}
