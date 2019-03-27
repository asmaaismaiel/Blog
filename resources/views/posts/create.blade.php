<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add post</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
              <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="/posts">Return home</a>
            </div>
            <ul class="nav navbar-nav">
              <li><a href="/home">Log out</a></li> 
            <!--<li><a href="/logout">Log out</a></li>--> 
              <!--<li><a href="/posts/edit/">Edit post</a></li>
              <li class="active"><a href="/posts/delete/">Delete post</a></li>
            </ul>-->
          </div>
        </nav>
    <div class="container">
      <h2>Add a post in our blog</h2><br/>
      <form method="post" action="{{url('posts')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="body">Body:</label>
              <br/>
              Enter post body here...
              <textarea rows = "10" cols = "80" name = "body">           
         </textarea><br>
            </div>
          </div>




        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
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