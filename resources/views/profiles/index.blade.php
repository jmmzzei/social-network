@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3 p-5">
      <img src="http://lorempixel.com/160/160" alt="main image" class="rounded-circle">
      
  </div>
  <div class="col-9">
    <div class="pt-5 d-flex justify-content-between align-items-baseline">
      <h1>{{ $user -> username }}</h1>
      <a href="#">Add New Post</a>    
  </div>    
    <ul class="d-flex list-unstyled">
      <li class="pr-3"><strong>0</strong> posts</li>
      <li class="pr-3"><strong>0</strong> followers</li>
      <li class="pr-3"><strong>0</strong> following</li>
    </ul>
    <div class="pt-2"><strong>{{ $user->profile->title }}</strong></div>
    <div class="pt-2">{{ $user->profile->description }}</div>
    <div class="pt-2"><a href="mysite.com">{{ $user->profile->link}}</a></div>
  </div>
 <div>
   <section class="row pt-4">
     <div class="col-4"><img src="http://lorempixel.com/500/600" alt="img1" class="w-100"></div>
     <div class="col-4"><img src="http://lorempixel.com/500/600" alt="img2" class="w-100"></div>
     <div class="col-4"><img src="http://lorempixel.com/500/600" alt="img3" class="w-100"></div>
   </section>
 </div>

</div>  
</div>
@endsection
