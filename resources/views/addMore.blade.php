@extends('include.master')
@section('content')
)
@if(Session::has('message'))

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  

 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <meta name="csrf-token" content="{{ csrf_token() }}">
<div class="alert alert-success alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<p class="alert alert-success">{{ Session::get('message') }}</p>
</div>
@endif
<div class="container-fluid white-bg">
<div class="col-md-12"><h3 class="mrg-btm">Task Master</h3></div>
<div class="col-md-12">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  

 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <meta name="csrf-token" content="{{ csrf_token() }}">


         <form name="add_name" id="add_name">  


            <div class="alert alert-danger print-error-msg" style="display:none">
            <ul></ul>
            </div>


            <div class="alert alert-success print-success-msg" style="display:none">
            <ul></ul>
            </div>
 
         <div class="col-md-4  col-xs-12">
         <div class="form-group">
         <div class="table-responsive">  
         <table class="table table-bordered" id="dynamic_field">  
         <tr>  
          <td><input type="text" name="name[]" placeholder="Enter Project Name" class="form-control name_list1"  /></td>  
          <td><button type="button" name="add" id="add" class="btn btn-success">+</button></td>  
           </tr>  
          </table>  
          </div>
         </div></div>



 <div class="form-group">
  <div class="col-xs-4">
  <select name="project_name"  class="form-control"  id="project_id">
  <option value="0">Project Name</option>
  @foreach($query as $val)
  <option value="{{$val->project_name}}">{{$val->project_name}}</option>
  @endforeach
  </select>
  </div>
  </div> 
  




        <div class="col-md-4  col-xs-12">
         <div class="form-group">
         <div class="table-responsive">  
         <table class="table table-bordered" id="dynamic_fieldtask">  
          <tr>  
          <td><input type="text" name="Task_Name[]" placeholder="Enter Task Name" class="form-control name_list2" /></td>  
         <td><button type="button" name="addTask" id="addTask" class="btn btn-success">+</button></td>  
                    </tr>  
                </table>  
            </div>
</div></div>





        <div class="col-md-4  col-xs-12">
         <div class="form-group">
         <div class="table-responsive">  
        <table class="table table-bordered" id="dynamic_fieldmodule">  
        <tr>  
        <td><input type="text" name="Module_Name[]" placeholder="Enter Module Name" class="form-control name_list3" /></td>  
         <td><button type="button" name="addmodule" id="addmodule" class="btn btn-success">+</button></td>  
          </tr>  
        </table>  
        </div>
    </div>
  </div>


        <div class="col-md-4  col-xs-12">
         <div class="form-group">
         <div class="table-responsive">  
         <table class="table table-bordered" id="dynamic_fieldsubtask">  
          <tr>  
          <td><input type="text" name="SubTask[]" placeholder="Enter SubTask Name" class="form-control name_list4" /></td>  
         <td><button type="button" name="addsubtask" id="addsubtask" class="btn btn-success">+</button></td>  
         </tr>  
         </table>  
        </div>
       </div></div>
  <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  



         </form>  
    </div> 
</div>


<script type="text/javascript">
    $(document).ready(function(){      
      var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  

   $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" placeholder="Enter Project Name" class="form-control name_list1" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
    
     
   });




      $('#addTask').click(function(){  
           i++;  
           $('#dynamic_fieldtask').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="Task_Name[]" placeholder="Enter Task Name" class="form-control name_list2" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  

         
      });  


  $('#addmodule').click(function(){  
           i++;  
           $('#dynamic_fieldmodule').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="Module_Name[]" placeholder="Enter Module Name" class="form-control name_list3" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  


      $('#addsubtask').click(function(){  
           i++;  
           $('#dynamic_fieldsubtask').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="SubTask[]" placeholder="Enter Subtask Name" class="form-control name_list4" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
 




      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  


      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });





      $('#submit').click(function(){  
      var formdata = new FormData($("#add_name")[0]);          
           $.ajax({  
                 type: "POST",  
           url: "{{URL::to('addmore')}}",
            //data : $('#project_m').serialize(),
             data : formdata,
            processData: false,
             contentType : false,
             success: function(msg){

                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        i=1;
                        $('.dynamic-added').remove();
                        $('#add_name')[0].reset();
                        $(".print-success-msg").find("ul").html('');
                        $(".print-success-msg").css('display','block');
                        $(".print-error-msg").css('display','none');
                        $(".print-success-msg").find("ul").append('<li >Record Inserted Successfully.</li>');
                        }
                        }  
                        });  
                        });  


                     function printErrorMsg (msg) {
                    $(".print-error-msg").find("ul").html('');
                    $(".print-error-msg").css('display','block');
                    $(".print-success-msg").css('display','none');
                   $.each( msg, function( key, value ) {
                   $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                   });
                   }
                    });  
                </script>



<script type="text/javascript">
  $('#submit').click(function(){
    //alert('oke');
    $(".error_class").empty();
    $(".success_class").empty();
var formdata = new FormData($("#formTaskmaster")[0]);
    $.ajax({  
           type: "POST",  
           url: "{{URL::to('task-master-insert')}}",
            //data : $('#project_m').serialize(),
            data : formdata,
           processData: false,
             contentType : false,
             success: function(msg){
                   var response = JSON.parse(msg);
                    if(response.status == "success"){
                       $("#success_response").html(response.messege);
                     window.location = response.redirectUrl;
          //window.location = response.redirectUrl;
        }
        else if(response.messege == "error"){
          window.location = response.redirectUrl;
        }
        else{
          $.each(response , function(key , value){
            $("#err_" + key).text(value);
          });
        }
           //console.log(msg);
              //location.reload();
            }
        }); 
  });
</script>

<style type="text/css">
  .alert-success {
    color: #a6b5b4;
    background-color: #d8f0ef;
    border-color: #d6e9c6;
}
</style>
</body>
</html>


@endsection