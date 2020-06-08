<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
  public function update(User $user){
    $this->authorize('update', $user->profile);
    $data = request()->validate([
      'description'=>'required',
      'title'=>'required',
      'image'=>'',
      'link'=>'url',
    ]);
  
    if(request('image')){
    $imagePath = request('image')->store('profile', 'public');

    $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
    $image->save();
    }
  
    auth()->user()->profile->update(array_merge(
      $data,
      ['image' => $imagePath],
    ));
    return redirect("/profile/{$user->id}");
  }

  public function edit(User $user){
    $this->authorize('update', $user->profile);
    return view('profiles/edit', compact('user'));
  }
  
  public function index(User $user){
    /* dd($user); */
    return view('profiles/index', compact('user'));
  }
}
