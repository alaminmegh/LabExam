
@extends('admin.layout')

@section('title')
Admin | Add Moderator
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('custom')}}/style/css/addUser.css"/>
@endsection

@section('main_content')
<div class="addUser card w-50 mx-auto mt-2">
  <div class="card-header">Upload Content</div>
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
    <form method="post" class="w-75 mx-auto" enctype="multipart/form-data">
      @csrf
      <div class="form-group mb-1 mt-3">
        <label for="">File Name:</label>
        <input type="text" class="form-control form-control-sm" id="" name="fileName" placeholder="File Name"/>
      </div>
      @if ($errors->has('fileName'))
        <p class="text-danger">{{ $errors->first('fileName') }}</p>
      @endif
      <div class="form-group">
        <label for="">Catagory:</label>
        <select class="form-control form-control-sm" id="" name="catagory">
          <option value="">Select Catagory</option>
          <option value="software">Software</option>
          <option value="movies">Movies</option>
          <option value="videosongs">Video Songs</option>
          <option value="natok">Natok</option>
        </select>
      </div>
        @if ($errors->has('catagory'))
          <p class="text-danger">{{ $errors->first('catagory') }}</p>
        @endif
        <div class="form-group">
          <label for="">Sub Catagory:</label>
            <select class="form-control form-control-sm" id="" name="subcatagory">
                <option value="">Select Catagory</option>
          <option value="bangla">Bangla</option>
          <option value="english">English</option>
          <option value="hindi">Hindi</option>
          <option value="nosubcatagory">No Sub Catagory</option>
          </select>
        </div>
          @if ($errors->has('subcatagory'))
            <p class="text-danger">{{ $errors->first('subcatagory') }}</p>
          @endif

          <div class="form-group">
            <label for="">Content:</label>
            <input type="file" class="form-control form-control-sm" id="" name="content" placeholder="Password"/>
          </div>
            @if ($errors->has('content'))
              <p class="text-danger">{{ $errors->first('content') }}</p>
            @endif

      <button type="submit" class="btn btn-block btn-primary mt-4">Upload</button>
    </form>
  </div>
</div>
@endsection
