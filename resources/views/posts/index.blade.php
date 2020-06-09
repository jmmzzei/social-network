@extends('layouts.app')

@section('content')
  <div class="container align-items-center">
  <h1 class="text-center font-weight-bold">What's new?</h1>
@foreach($posts as $post)
    <div class="row p-2">
      <div class="col-6 offset-3">
        <div class="card my-3 p-3">
          <div>
            <a href="/p/{{$post->id}}"><img src="/storage/{{$post->image}}" class="w-100" ></a>        
          </div>
          <p class="pt-3 ">
            <span class="font-weight-bold"> 
             <a href="/profile/{{$post->user->id}}"> <span class="text-dark">{{$post->user->username}}</span></a>
            </span> 
            {{$post->caption}}
          </p>
        </div>
      </div>
    </div>
@endforeach
  <div class="row">
    <div class="col-12 d-flex justify-content-center ">{{$posts->links()}}</div>
  </div>
  </div>
@endsection

