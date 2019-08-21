<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
  public function index()
  {
    if(session()->has('username')){
      return view('admin.index');
    }else {
      return redirect()->route('login.index');
    }
  }

  public function addModerator()
  {
    if(session()->has('username')){
      return view('admin.addModerator');
    }else {
      return redirect()->route('login.index');
    }
  }

  public function createModerator(SignupRequest $request)
  {
    $addUser = DB::table('users')->insert(
      ['username' => $request->username, 'email' => $request->email, 'password' => $request->password, 'role' => $request->userType]
    );

    if($addUser){
      $request->session()->flash('success','Registration Successfully!');
      return redirect()->route('admin.addModerator');
    }else {
      $request->session()->flash('error','Registration Fail!');
      return redirect()->route('admin.addModerator');
    }
  }
}
