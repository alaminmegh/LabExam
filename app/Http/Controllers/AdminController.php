<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;
use Illuminate\Support\Facades\DB;
use File;

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

  public function upload_content(Request $request)
  {
      if(session()->has('username')){
        if($request->hasFile('content')){
          $file = $request->file('content');

          $fileName = $request->fileName;
          $n = $fileName.'.'.$file->getClientOriginalExtension();
          $file->move('userdata', $fileName.'.'.$file->getClientOriginalExtension());
          $id = DB::table('contents')->max('fileId');
          $id = $id + 1;
          $addFile = DB::table('contents')->insert(
            ['name' => $n, 'catagory' => $request->catagory, 'subcatagory' => $request->subcatagory,'fileId' => $id]
          );

          if($addFile){
            $request->session()->flash('success','File Added Successfully!');
            return redirect()->route('admin.add_content');
          }else {
            $request->session()->flash('error','File Added Fail!');
            return redirect()->route('admin.add_content');
          }
          }else {
            $request->session()->flash('error','No file Selected!');
            return redirect()->route('admin.add_content');
          }
  }else {
    return redirect()->route('login.index');
  }
  }

  public function softwareList()
  {
    if(session()->has('username')){
      $data = DB::table('contents')
      ->get();
       return view('admin.softwareList', ['softwareList' => $data]);
    }else {
      return redirect()->route('login.index');
    }
  }

  public function showProfile(Request $request)
  {
    if(session()->has('username')){
      $username = $request->session()->get('username');
      $data = DB::table('users')
      ->where('username',$username)
      ->get();
       return view('admin.profile', ['userdata' => $data]);
    }else {
      return redirect()->route('login.index');
    }
  }

  public function searchContent(Request $request)
  {
    if(session()->has('username')){
      if($request->ajax()){
        $output = '';
        $query = $request->list;

        if($query != ''){
         $text = $query['data'];
         $filter = $query['filter'];
         if(sizeof($filter) == 3){
           $data = DB::table('contents')
             ->where($filter[0], 'like', '%'.$text.'%')
             ->orWhere($filter[1], 'like', '%'.$text.'%')
             ->orWhere($filter[2], 'like', '%'.$text.'%')
             ->get();
         }else if(sizeof($filter) == 2){
           $data = DB::table('contents')
             ->where($filter[0], 'like', '%'.$text.'%')
             ->orWhere($filter[1], 'like', '%'.$text.'%')
             ->get();
         }else if(sizeof($filter) == 1){
           $data = DB::table('contents')
             ->where($filter[0], 'like', '%'.$text.'%')
             ->get();
         }
        }else{
          $data = DB::table('contents')->get();
        }

        $total_row = $data->count();

        if($total_row > 0){
          $count=1;
          foreach($data as $row){
            $output .= '
            <tr class="text-center" style="font-size: 14px !important;">
              <td>'.$count.'</td>
              <td>'.$row->fileId.'</td>
              <td>'.$row->name.'</td>
              <td>'.$row->catagory.'</td>
              <td>'.$row->subcatagory.'</td>
              <td><input type="button" name="view" value="View" id="'.$row->fileId.'" class="btn btn-primary btn-sm view_data table_btn" ></td>
              <td><input type="button" name="edit" value="Edit" id="'.$row->fileId.'" class="btn btn-primary btn-sm edit_data table_btn" ></td>
              <td><input type="button" name="delete" value="Delete" id="'.$row->fileId.'" class="btn btn-primary btn-sm delete_data table_btn" ></td>
            </tr>';
            $count++;
          }
        }else{
          $output = '
          <tr>
            <td class="text-center" colspan="10"><h4>No Data Found</h4></td>
         </tr>';
       }
       $data = array('table_data'  => $output,'total_data'  => $total_row);
       echo json_encode($data);
    }else {
      return redirect()->route('login.index');
    }
  }}
  public function contentDelete(Request $request)
  {
    if(session()->has('username')){
        $fileId = $request->fid;
      // $username = $request->session()->get('username');
      $n = DB::table('contents')
      ->where('fileId',$fileId)
      ->get();
      $filename = $n[0]->name;
      $res = DB::table('contents')
      ->where('fileId',$fileId)
      ->delete();
      $des = "userdata/".$filename;
      File::delete($des);

      if($res){
        $softwareList = DB::table('contents')
        ->get();
        $output = "";
        $count =1;
        foreach ($softwareList as $data){
            $output .= '<tr class="text-center" style="font-size: 14px !important;">
            <td>'.$count.'</td>
            <td>'.$data->fileId.'</td>
            <td>'.$data->name.'</td>
            <td>'.$data->catagory.'</td>
            <td>'.$data->subcatagory.'</td>
            <td><input type="button" name="view" value="View" id="'.$data->fileId.'" class="btn btn-primary btn-sm view_data table_btn" ></td>
            <td><input type="button" name="edit" value="Edit" id="'.$data->fileId.'" class="btn btn-primary btn-sm edit_data table_btn" ></td>
            <td><input type="button" name="delete" value="Delete" id="'.$data->fileId.'" class="btn btn-primary btn-sm delete_data table_btn" ></td>
          </tr>';
        $count++;
}
        // $data = array('table_data'  => $output,'total_data'  => $total_row);
        echo json_encode($output);
      }
    }else {
      return redirect()->route('login.index');
    }
  }

}
