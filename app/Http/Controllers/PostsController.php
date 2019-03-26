<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use AuthenticatesUsers;

use Illuminate\Http\Request;

use App;
use App\post; 
use App\User;
use Illuminate\Support\Facades\Input;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = App\post::all();
    	return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                if (Auth::check())
        {
        return view('posts.create');
        }
        else {
            return Redirect::to('login');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),
            [
                'title'=>'required|min:2',
                'body'=>'required|min:25'
         ]);

    	$newPost = new post;
    	$newPost->title = request('title');
    	$newPost->body = request('body');
       
    	
    	$newPost->save();
    	return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = App\post::find($id);
        $user = $post->user;
    	return view('posts.show',compact("post","user"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //@if (Route::has('login'))
          //  @auth
        if (Auth::check())
        {
        $post = App\post::find($id);
    	
    	return view('posts.edit',compact("post","id"));
        }
        else {
            return Redirect::to('login');
     ?>
    <!--<div class="alert alert-danger">
  <strong>Error!</strong> <strong>Please log in first to do this action.</strong>
</div>-->
<?php
//return view('welcome');

    }
        //@else
           // <a href="{{ route('login') }}">Login</a>
        
           // @endauth
       // @endif        
        
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
        $post= App\post::findOrFail($id);
        //$post = App\post::find($id);
        
        $this->validate(request(),
            [
                'title'=>'required|min:2',
                'body'=>'required|min:25'
            
         ]);
        
        $input = $request->all();

        $post->fill($input)->save();
        
    Session::flash('flash_message', 'Post successfully added!');
    
     return redirect('posts');

    //return redirect()->back();
   // return view('posts.index');
    
    //return redirect()->back();
        //$post->title = request('title');
    	//$post->body = request('body');
    	//$post->save();
    	//return redirect('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::check())
        {
        $post = \App\post::findOrFail($id);

        $post->delete();

        Session::flash('flash_message', 'Post has been  successfully deleted!');
        
        //return view('posts.index');
        //return redirect()->back();
        
        return redirect('posts');
         //$post = \App\post::find($id);
        //$post->delete();
        //return redirect('posts')->with('success','Post has been  deleted');
    }
 else {
     ?>
    <!--<div class="alert alert-danger">
  <!--<strong>Error!</strong > <strong>Please log in first to do this action.</strong>-->
  
  
 
<!--</div>-->
<?php
return Redirect::to('login');
//return view('welcome');
    }
    }
}
