
$(document).ready(function(){



  function searchStudent(string = ''){
    // console.log(string);
    $.ajax({
      url:"/admin/searchContent",
      method:'GET',
      data:{list:string},
      dataType:'json',
      success:function(data){
        $('#student_data').html(data.table_data);
        // $('#total_records').text(data.total_data);
      }
    });
  }

 $(document).on('keyup', '#searchbox', function(){
  var query = $(this).val();
  var list = [];
  $.each($("input[name='search_filter']:checked"), function(){
    list.push($(this).val());
  });
  var result = {
    'data'   : query,
    'filter' : list
  };
  searchStudent(result);
 });

 $(document).on('click', '#search_btn', function(){
  var query = $('#searchbox').val();
  var list = [];
  $.each($("input[name='search_filter']:checked"), function(){
    list.push($(this).val());
  });
  var result = {
    'data'   : query,
    'filter' : list
  };
  searchStudent(result);
 });


 $(document).on('click', '.delete_data', function(){
   if(confirm("Do you want to delete this?")){
     var sid = $(this).attr("id");
     $.ajax({
       url:"content_delete",
       method:'GET',
       data:{fid:sid},
       dataType:'json',
       success:function(data){
         $('#student_data').html(data);
         // $('#total_records').text(data.total_data);
       }
     });
   }
 });

});
