<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
