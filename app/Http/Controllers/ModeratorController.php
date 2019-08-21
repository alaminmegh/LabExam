<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeratorController extends Controller
{
  public function index()
  {
    if(session()->has('username')){
      return view('moderator.index');
    }else {
      return redirect()->route('login.index');
    }
  }
}
