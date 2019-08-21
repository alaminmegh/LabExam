<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
  public function logout(Request $req)
  {
    if($req->session()->has('username')){
      $req->session()->flush();
      return redirect()->route('login.index');
    }else {
      return redirect()->route('login.index');
    }
  }
}
