<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Edit post</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
          <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="/posts">Return home</a>
            </div>
            <ul class="nav navbar-nav">
               <li><a href="/posts/create/">Create post</a></li>
               <li><a href="/home">Log out</a></li> 
               <!--<li><a href="/logout">Log out</a></li> -->
              <!--<li><a href="/posts/edit/">Edit post</a></li>
              <li class="active"><a href="/posts/delete/">Delete post</a></li>-->
            </ul>
          </div>
        </nav>
    <div class="container">
      <h2>Edit this post</h2><br  />
        <form method="post" action="{{action('PostsController@update', $id)}}">
         {{csrf_field()}}
      
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" value="{{$post->title}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="body">Body</label>
               <textarea rows = "10" cols = "80" name = "body">
    {{$post->body}}
         </textarea><br>
            </div>
          </div>


        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
       @if(count($errors))
         <div class="alert alert-danger">
             @foreach($errors->all() as $error)
             <div >
                 {{$error}}
             </div>
              @endforeach
         </div>
@endif     
    </div>
  </body>
</html>