@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3 p-5">
      <img src="{{$user->profile->profileImage()}}" alt="main image" class="rounded-circle w-100">
  </div>
  <div class="col-9">
    <div class="pt-5 d-flex justify-content-between align-items-baseline">
    <div class="d-flex align-items-center">
       <div class="h4">{{ $user->username }}</div>

    @cannot('update', $user->profile)
      <div id="follow-button" data-user="{{$user}}" data-follows="{{$follows}}"></div>
    @endcannot
 
   </div>
@can('update', $user->profile)
      <a href="/p/create">Add New Post</a>    
      @endcan
  </div>

@can('update', $user->profile)
    <a href="/profile/{{$user->id}}/edit" class="mt-2 mb-2 d-block">Edit profile</a>
@endcan  

<ul class="d-flex list-unstyled">
      <li class="pr-3"><strong>{{$user->posts->count()}}</strong> posts</li>
      <li class="pr-3"><strong>{{$user->profile->followers->count()}}</strong> followers</li>
      <li class="pr-3"><strong>{{$user->following->count()}}</strong> followings</li>
    </ul>
    <div class="pt-1"><strong>{{  $user->profile->title }}</strong></div>
    <div class="pt-1">{{ $user->profile->description}}</div>
    <div class="pt-1"><a href="mysite.com">{{ $user->profile->link }}</a></div>
  </div>
 <div>
   <section class="row pt-4">
    @foreach($user->posts as $post)
      <div class="col-4 pb-4">
        <a href="/p/{{$post->id}}">
          <img src="/storage/{{$post->image}}" class="w-100">
        </a>
      </div>
    @endforeach
   </section>
 </div>

</div>
</div>
@endsection
