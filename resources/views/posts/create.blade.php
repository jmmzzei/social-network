@extends('layouts.app')

@section('content')
  <div class="container">
    <form action="/p" enctype="multipart/form-data" method="POST">
      @csrf
      <div class="row">
        <div class="col-8 offset-2">
        <div class="pt-4 pb-2 text-center">
        <h1>Add New Post</h1>
    </div>
    <div class="row ">
      <label type="image" class="col-md-4 col-form-label">Image</label>
      <input type="file" class="form-control-file" id="image" name="image" >
        
      @error('image')
          <strong class="alert alert-danger mt-3">{{ $message }}</strong>
        @enderror
    </div>
      
    <div class=" form-group row pt-3">
      <label for="caption" class="col-md-4 col-form-label ">Post Caption</label>
      <input id="caption" 
        class="form-control @error('name') is-invalid @enderror" 
        type="text" 
        name="caption" 
        value="{{ old('caption') }}"  
        autocomplete="caption" autofocus >
        
      @error('caption')
          <strong class="alert alert-danger mt-3">{{ $message }}</strong>
        @enderror
    </div>
    <div class="row pt-4"><button class="btn btn-primary">Post</button></div>
      </div>
    </div>
  </div> 
</form>
</div>
@endsection
