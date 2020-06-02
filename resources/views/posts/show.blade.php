@extends('layouts.app')

@section('content')
  <div class="container align-items-center">
  <div class="card">
    <div class="row p-4">
      <div class="col-8">
        <img src="/storage/{{$post->image}}" class="w-100" >  
      </div>
      <div class="col-4 border-left pl-4 pr-4">
        <h3>{{$post->user->username}}</h3>      
        <p>{{$post->caption}}</p>
      </div>     
    </div>     
  </div>
  </div>
@endsection
