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
    if(session()->has('username')){
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
  }else {
    return redirect()->route('login.index');
  }
  }

  public function add_content()
  {
    if(session()->has('username')){
      return view('admin.addContent');
    }else {
      return redirect()->route('login.index');
    }
  }

  public function upload_content(SignupRequest $request)
  {
      if(session()->has('username')){

    //     $file = $request->file('content');
    //
    //         // echo "File Name: ".$file->getClientOriginalName();
    //         // echo "<br>File Extension: ".$file->getClientOriginalExtension();
    //         // echo "<br>File Size: ".$file->getSize();
    //         // echo "<br>File Mime Type: ".$file->getMimeType();
    //         $file->move('/userdata', $request->fileName);
    //
    // $addFile = DB::table('contents')->insert(
    //   ['name' => $request->fileName, 'catagory' => $request->catagory, 'subcatagory' => $request->subcatagory]
    // );
    //
    // if($addFile){
    //   $request->session()->flash('success','File Added Successfully!');
    //   return redirect()->route('admin.addContent');
    // }else {
    //   $request->session()->flash('error','File Added Fail!');
    //   return redirect()->route('admin.addContent');
    // }
    echo $request;
  }else {
    return redirect()->route('login.index');
  }
  }

}
