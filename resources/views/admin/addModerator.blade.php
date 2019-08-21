
@extends('admin.layout')

@section('title')
Admin | Add Moderator
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('custom')}}/style/css/addUser.css"/>
@endsection

@section('main_content')
<div class="addUser card w-50 mx-auto mt-2">
  <div class="card-header">Add Moderator</div>
  <div class="card-body pt-1">
    @if(session()->has('success'))
    <div class="alert alert-success py-1 w-75 mx-auto">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>{{session('success')}}</strong>
    </div>
    @endif
    @if(session()->has('error'))
    <div class="alert alert-danger py-1 w-75 mx-auto">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>{{session('error')}}</strong>
    </div>
    @endif
    <form method="post" class="w-75 mx-auto">
      @csrf
      <div class="form-group mb-1 mt-3">
        <label for="">Username:</label>
        <input type="text" class="form-control form-control-sm" id="" name="username" placeholder="Username"/>
      </div>
      @if ($errors->has('username'))
        <p class="text-danger">{{ $errors->first('username') }}</p>
      @endif
      <div class="form-group mb-1 mt-3">
        <label for="">Email:</label>
        <input type="text" class="form-control form-control-sm" id="" name="email" placeholder="Email"/>
      </div>
      @if ($errors->has('email'))
        <p class="text-danger">{{ $errors->first('email') }}</p>
      @endif
      <div class="form-group mb-1 mt-3">
        <label for="">Password:</label>
        <input type="text" class="form-control form-control-sm" id="" name="password" placeholder="Password"/>
      </div>
      @if ($errors->has('password'))
        <p class="text-danger">{{ $errors->first('password') }}</p>
      @endif
      <div class="form-group mb-1 mt-3">
        <label for="">Confirm Password:</label>
        <input type="text" class="form-control form-control-sm" id="" name="cpassword" placeholder="Confirm Password"/>
      </div>
      @if ($errors->has('cpassword'))
        <p class="text-danger">{{ $errors->first('cpassword') }}</p>
      @endif

      <div class="form-group">
        <label for="">User Type:</label>
        <select class="form-control form-control-sm" id="" name="userType">
          <option value="">Select Role</option>
          <option value="moderator">Moderator</option>
        </select>
      </div>
        @if ($errors->has('userType'))
          <p class="text-danger">{{ $errors->first('userType') }}</p>
        @endif

      <button type="submit" class="btn btn-block btn-primary mt-4">Add Moderator</button>
    </form>
  </div>
</div>
@endsection
