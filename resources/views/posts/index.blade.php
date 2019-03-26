<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>All posts</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
         <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="/posts/create/">Create post</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="/home">Log out</a></li> 
              <!--<li><a href="/logout">Log out</a></li>--> 
              <!--<li><a href="/posts/edit/">Edit post</a></li>
              <li class="active"><a href="/posts/delete/">Delete post</a></li>-->
            </ul>
          </div>
        </nav>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Body</th>
        <th>Created since</th>

     
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($posts as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['title']}}</td>
        <td>{{$post['body']}}</td>
        <td>{{$post->created_at->diffForHumans(carbon\carbon::now())}}</td>

        
        <td><a href="{{action('PostsController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('PostsController@destroy', $post['id'])}}" method="post">
             {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>