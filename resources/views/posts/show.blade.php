@extends('layouts.master')

@section('title', 'Post Page')


@section('content')
    <h1>{{$post->title}}</h1>
    <h1>{{$post->body}}</h1>



    <h1>Users</h1>
    <div class="container">
      @foreach($user as $user)
      <div>{{$user->name}}</div>
      <div>{{$user->email}}</div>
      <div>{$user->created_at}}</div>
      <div>{{$user->updated_at}}</div>
      @endforeach
    </div>

    <h2>Add Comment</h2>
    <form action="/posts/show/{{$post->id}}" method="POST">
      {{csrf_field()}}

      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" name="email">
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="text" class="form-control" id="password" name="password">
      </div>

      <button type="submit" class="btn btn-info">Add User</button>
    </form> 
    @if(count($errors))
    <div class="alert alert-danger">
      <div>
        @foreach($errors->all() as $key=>$error)
        <div>{{$error}}</div>
        @endforeach
      </div>
    </div>
    @endif
@stop