<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
  public function update(User $user){
    $data = request()->validate([
      'description'=>'',
      'title'=>'',
      'image'=>'',
      'link'=>'url',
    ]);
   $user->profile->update($data);
   return redirect("/profile/{$user->id}");
  }

  public function edit(User $user){
    return view('profiles/edit', compact('user'));
  }
  
  public function index(User $user){
    return view('profiles/index', compact('user'));
  }
}
