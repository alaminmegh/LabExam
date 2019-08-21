<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
  public function index()
  {
    return view('login.index');
  }

  public function user_validation(LoginRequest $request)
  {
    $user = DB::table('users')
    ->where('username',   $request->username)
    ->where('password',   $request->password)
    ->get();

    if($user){
      $request->session()->put('username',$request->username);
      return redirect()->route('admin.index');
    }else {
      $request->session()->flash('error','Username & Password invalid!');
      return redirect()->route('login.index');
    }
  }
}
