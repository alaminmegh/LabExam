
@extends('moderator.layout')

@section('title')
Moderator | Profile
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('custom')}}/style/css/admin/profile.css">
@endsection

@section('active_profile')
id="active"
@endsection

@section('main_content')
<div class="profile mt-3">
  <h5 class="text-center py-2 text-white my-0">Profile Information</h5>
  <table class="table table-sm table-striped table-hover border">
    <tbody>
      <tr class="text-center">
        <td class="text-right" width='50%'>Username:</td>
        <td class="text-left" width='50%'>{{$userdata[0]->username}}</td>
      </tr>
      <tr>
        <td class="text-right" width='50%'>Email:</td>
        <td class="text-left" width='50%'>{{$userdata[0]->email}}</td>
      </tr>
      <tr>
        <td class="text-right" width='50%'>Type:</td>
        <td class="text-left" width='50%'>{{$userdata[0]->role}}</td>
      </tr>
    </tbody>
  </table>
</div>
@endsection
