$(document).ready(function(){

  $(document).on('click', '.edit_data', function(event){
    event.preventDefault();
    if(confirm("Do you want to delete this?")){
      var sid = $(this).attr("id");
      $.ajax({
        url:"/content_delete",
        method:'GET',
        data:{fid:sid},
        dataType:'json',
        success:function(data){
          $('#student_data').html(data);
          // $('#total_records').text(data.total_data);
        }
      });
    }
  }

}
