@extends('layouts.app')

          <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="/posts">Home</a>
            </div>
            <ul class="nav navbar-nav">
               <li><a href="/posts/create/">Create post</a></li>
               
              <!--<li><a href="/posts/edit/">Edit post</a></li>
              <li class="active"><a href="/posts/delete/">Delete post</a></li>-->
            </ul>
          </div>
        </nav>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
