
@extends('moderator.layout')

@section('title')
Moderator | software List
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('custom')}}/style/css/userList.css"/>
@endsection

@section('main_content')
<div class="userList card mt-2">
  <div class="card-header text-center bg-primary text-white"><h5>software List</h5></div>
  <div class="card-body px-1">
    <div class="pb-4">
      <div class="form-inline w-50 ml-auto">
        <div class="input-group">
          <input type="text" name="searchbox" id="searchbox" class="form-control form-control-sm" placeholder="Search" style="font-size: 14px !important;" maxlength="50" size="50"/>
          <div class="input-group-prepend">
            <button class="btn btn-sm btn-primary px-3" type="button" id="search_btn"><i class="fas fa-search"></i></button>
          </div>
          <div class="input-group-prepend dropdown">
            <button type="button" class="btn btn-sm border px-3 dropdown-toggle" data-toggle="dropdown">
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu text-left shadow-lg search_dropdown">
              <li>
                <a class="dropdown-item px-2 py-0 search_dropdown_link" href="#">
                  <input type="checkbox" name="search_filter" value="name" checked> Name
                </a>
              </li>
              <li>
                <a class="dropdown-item px-2 py-0 search_dropdown_link" href="#">
                  <input type="checkbox" name="search_filter" value="catagory" checked> Catagory
                </a>
              </li>
              <li>
                <a class="dropdown-item px-2 py-0 search_dropdown_link" href="#">
                  <input type="checkbox" name="search_filter" value="subcatagory" checked> Sub Catagory
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <table class="table table-sm table-bordered table-hover">
      <thead>
        <tr class="text-center" style="font-size: 14px !important;">
          <th width='5%'>#</th>
          <th width='10%'>File Id</th>
          <th width='15%'>File Name</th>
          <th width='18%'>Catagory</th>
          <th width='18%'>Sub Catagory</th>
          <th width='6%'>View</th>
          <th width='6%'>Edit</th>
          <th width='6%'>Delete</th>
        </tr>
      </thead>
      <tbody id='student_data'>
        <?php $count =1; ?>
        @foreach ($softwareList as $data)
          <tr class="text-center" style="font-size: 14px !important;">
            <td>{{$count}}</td>
            <td>{{$data->fileId}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->catagory}}</td>
            <td>{{$data->subcatagory}}</td>
            <td><input type="button" name="view" value="View" id="{{$data->fileId}}" class="btn btn-primary btn-sm view_data table_btn" ></td>
            <td><input type="button" name="edit" value="Edit" id="{{$data->fileId}}" class="btn btn-primary btn-sm edit_data table_btn" ></td>
            <td><input type="button" name="delete" value="Delete" id="{{$data->fileId}}" class="btn btn-primary btn-sm delete_data table_btn" ></td>
          </tr>
        <?php $count++; ?>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection

@section('ajax')
<script type="text/javascript" src="{{asset('custom')}}/style/ajax/search.js"></script>
@endsection
