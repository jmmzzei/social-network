@extends('layouts.app')

@section('content')
<div class="container align-items-center">
  <div class="d-flex flex-lg-row flex-column align-items-center justify-content-between">
    <h1 class="font-weight-bold">What's new, {{$user->username}}?</h1>
    <div>
      <a href="/profile/{{$user->id}}" class="btn btn-outline-dark">My Profile</a>
    </div>    
  </div>
  @if(count($posts)>1)
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
@else
  <h3 class="m-4 border text-center p-4 ">It seems that you don't follow anybody...</h3>
  <div class="container m-4 border text-center p-4 ">
        <p>Here are some recommendations:</p>
  <div class="row">
  @foreach($recommendations as $recommendation)
    <div class="col-sm ">
      <a href="/profile/{{$recommendation->id}}" class="text-dark">
        <div class="card p-1 d-flex flex-row align-items-center justify-content-center">
              <div style="width: 50px;" class="m-3"><img style="height: 50px;" class="w-100 rounded-circle" src="{{$user->profile->profileImage()}}" alt=""></div>
              <div class="p-4">{{$recommendation->username}}</div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
</div>
  @endif
    <div class="row">
      <div class="col-12 d-flex justify-content-center ">{{$posts->links()}}</div>
  </div>
  </div>
@endsection

