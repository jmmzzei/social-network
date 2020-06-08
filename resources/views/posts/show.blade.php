@extends('layouts.app')

@section('content')
  <div class="container align-items-center">
  <div class="card">
    <div class="row p-4">
      <div class="col-8">
        <img src="/storage/{{$post->image}}" class="w-100" >  
      </div>
      <div class="col-4 border-left pl-4 pr-5">
       
         <div class="d-flex align-items-center pb-4">
          <div class="pr-3 ">
            <img src="{{$post->user->profile->profileImage()}}" alt="profile image" class="rounded-circle w-100" style="max-width: 40px;">
          </div>
          <div class="font-weight-bold"> 
            <a href="/profile/{{$post->user->id}}"> <span class="text-dark">{{$post->user->username}}</span></a>
         <b class="p-2">·</b> 
          <a href="#">Follow</a>          
</div>                 
        </div>
        
        <p><span class="font-weight-bold"> 
          <a href="/profile/{{$post->user->id}}"> <span class="text-dark">{{$post->user->username}}</span></a>
          </span> {{$post->caption}}</p>
       </div>     
    </div>     
  </div>
  </div>
@endsection
