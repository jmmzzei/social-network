
@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
      @csrf
      @method('PATCH')
    <div class="row">
      <div class="col-8 offset-2">
        <div class="pt-4 pb-2 text-center">
          <h1>Edit Profile</h1>
        </div>
        <div class="row ">
          <label type="image" class="col-md-4 col-form-label">Profile Pic</label>
          <input type="file" class="form-control-file" id="image" name="image" >
          @error('image')
            <strong class="alert alert-danger mt-3">{{ $message }}</strong>
          @enderror
        </div>

<div class="form-group pt-3 row">
    <label for="title" class="d-block">title </label>
    <input type="title" class="form-control" id="title" placeholder="Enter title" >
        @error('title')
          <strong class="alert alert-danger mt-3">{{ $message }}</strong>
        @enderror
  </div>

  
<div class="form-group pt-3 row">
    <label for="description" class="d-block">description </label>
    <input type="description" class="form-control" id="description"  placeholder="Enter description" value="{{$user->profile->description}}">
        @error('description')
          <strong class="alert alert-danger mt-3">{{ $message }}</strong>
        @enderror
  </div>

  
<div class="form-group pt-3 row">
    <label for="link" class="d-block">link </label>
    <input type="link" class="form-control" id="link" placeholder="Enter link" value="{{$user->profile->link}}">
        @error('link')
          <strong class="alert alert-danger mt-3">{{ $message }}</strong>
        @enderror
  </div>


    <div class="row pt-4"><button class="btn btn-dark">Change Profile</button></div>

      </div>
    </div>
  </div> 
</form>

</div>
@endsection
