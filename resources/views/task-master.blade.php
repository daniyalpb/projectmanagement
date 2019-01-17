<!DOCTYPE html>
<html>
<head>
 <title>Task Master</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.12.2/semantic.min.css" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.12.2/semantic.min.js"></script>
 

 </head>


   <body>
   <body class="hold-transition skin-blue sidebar-mini">
   <div class="wrapper">
    @include('include.script')
    <div class="content-wrapper">
    @yield('content')
    </div>
      </div>
       <script type="text/javascript"   src="{{url('js/adminlte.min.js')}}" async  ></script>
<!--      <script type="text/javascript"  src="{{url('js/bootstrap.min.js')}}" async  ></script>
 -->     <script type="text/javascript"  src="{{url('js/jquery.dataTables.min.js')}}" defer></script>
     <script type="text/javascript"  src="{{url('js/dataTables.bootstrap4.min.js')}}" defer></script>

    </body>
     <div class="container">
      <center><h3 class="box-title" style="margin-top: 7px;margin-bottom: 46px;" >Task Details</h3></center> 

     <form method="post" id="fromraiserticket"  name="fromraiserticket" enctype="multipart/form-data" >
      {{ csrf_field() }}
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" style=" margin-left:-74%;
    margin-top: 2%;font-size:-90%;"   data-target="#myModal">+</button>

    <div class="col-md-3 col-xs-12">
     <label for="title">Select Project:</label>
     <select name="state" id="state" class="form-control" style="width:200px">
     <option value="">--- Select State ---</option>
     @foreach ($states as $key => $value)
      <option value="{{ $key }}">{{ $value->project_name }}</option>
      @endforeach
      </select>
        </div>
              

          <div class="col-md-3 col-xs-12">
          <label for="title" style="margin-left: 60%;">Select Module:</label>
          <select name="city" id="city_id" class="form-control" style="width:200px; margin-left: 50%;" >
          </select>
            </div>

        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" style=" margin-left:32%;
       margin-top: 2%;font-size:-90%;"  data-target="#myModal1">+</button>

     <div class="col-md-3  col-xs-12">
     <label for="title" style="margin-left:106%;">SelectTask:</label>
     <select name="task" id="task" class="form-control" style="width:200px;margin-left: 87%" >
     </select>
      </div>
     <button type="button" class="btn btn-info btn-lg" data-toggle="modal" style=" margin-left: 15%; margin-top:2%; font-size:-90%; float: left;
   " data-target="#myModal2">+</button>

   <div class="col-md-4  col-xs-12">
   <label for="title">SubTask:</label>
   <input type="text" name="SubTask" class="form-control" style="width:200px" >
   </div>

  <div class="col-md-4 col-xs-12"> 
  <label for="title" style="margin-left: 17%;">Task Category:</label>
   <select name="task_category"  class="form-control"  id="id" style="width:200px; margin-left: 9%;" >

    <option value="0" disabled="disabled">Task  Category</option>
    @foreach($taskcategory as $val)
    <option value="{{$val->task_category}}">{{$val->task_category}}</option>
    @endforeach
   </select>
     </div>


       <div class="col-md-3  col-xs-12">
       <label for="title" style="margin-left:31%;">Remark:</label>
       <input type="text" name="remark" class="form-control" style="width:200px;margin-left: 12%;" >
       </div>
       <br>
     <input type="button" name="submit" id="submit" value="Submit" class="btn btn-primary" style="margin-left: 1%; margin-top: 2%;">

    </form>

</form>
  </div>
  </div>
    </div>
</div>


<form type="text" id="projectform" name="projectform" method="post">

{{ csrf_field() }}

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->\
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Task Header</h4>
      </div>
      <div class="modal-body">
      

  <div class="col-md-4  col-xs-12">
  <div class="form-group">
  <input class="form-control"  style="margin-top: 53%;
    margin-left: 98%;" name="savepname" id="savepname"  required="yes" placeholder="Project Name"  >
 </div>
 </div>
  </div>

    
      <input type="hidden" name="projectids" id="projectids" >

      </form>

        <div class="modal-footer">
          <button type="button" class="btn btn-default"  style=" margin-top: 40%;" data-dismiss="modal">Close</button>
           <button type="button" class="btn btn-primary"  style=" margin-top: 40%;" id="Save_Task_Details">Save changes</button>
        </div>
    </div>

  </div>
</div>

<form  id="saveproject" name="saveproject"  method="post">

{{ csrf_field() }}
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button"  class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Task Header</h4>
      </div>
      <div class="modal-body">
      

  <div class="col-md-4  col-xs-12">
  <div class="form-group">
  <input class="form-control"  style="margin-top: 53%;
    margin-left: 98%;" name="savepname1" id="savepname1"  required="yes" placeholder="Module Name"  >
 </div>
 </div>
  </div>



 <input type="hidden" id="state_ID" name="state_ID">
</form>

        <div class="modal-footer">
          <button type="button" class="btn btn-default"  style=" margin-top: 40%;" data-dismiss="modal">Close</button>
           <button type="button" class="btn btn-primary"  style=" margin-top: 40%;" id="Save_Task_Details1">Save changes</button>
        </div>
    </div>

  </div>
</div>





<form type="text" id="taskform" name="taskform" >
{{ csrf_field() }}
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Task Header</h4>
      </div>
      <div class="modal-body">
      

  <div class="col-md-4  col-xs-12">
  <div class="form-group">
  <input class="form-control"  style="margin-top: 53%;
    margin-left: 98%;" name="savepname2" id="savepname2"  required="yes" placeholder="Task Name"  >
 </div>
 </div>
  </div>

  <input type="hidden" id="Task_ids" name="Task_ids">
   <input type="hidden" name="city" id="city" >
  </form>
   <div class="modal-footer">
   <button type="button" class="btn btn-default"  style=" margin-top: 40%;" data-dismiss="modal">Close</button>
   <button type="button" class="btn btn-primary"  style=" margin-top: 40%;" id="Save_Task_Details2">Save changes</button>
   </div>
   </div>
   </div>
   </div>
  </div></form> 

<div class="content">
<div class="box box-default">
<div class="box-header with-border">
<!-- <center><h3 class="box-title">Task Details</h3></center> 
 --><div class="box-tools pull-right">
<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
</div>
</div>

 <div class="box-body" > 
 <!-- center><h3 style="color: #0099FF;">Employee list</h3></center><hr> --> 
  <div class="table-responsive">
  <table class="table table-bordered" id="example">
  <thead>
  <tr>
  <th>Sr.No</th> 
  <th>Project Name</th> 
  <th>Module Name</th> 
  <th> Task Name</th>
  <th>SubTask</th>
  <th>Task Category</th>
  <th>User History</th>
  </tr>
  </thead>
  <tbody>
 @foreach($query as $val)
 <tr>
  <td>{{$val->id}}</td>
  <td>{{$val->project_name}}</td>
  <td>{{$val->module_name}}</td>
  <td>{{$val->Task_Name}}</td>
  <td>{{$val->SubTask_Name}}</td>
  <td>{{$val->task_category}}</td>
  <td>{{$val->Remark}}</td>
 </tr>
 @endforeach
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>



<style type="text/css">
  table.table-bordered.dataTable {
    border-collapse: separate !important;
    margin-left: 2%;

  }
  .box-header {
    color: #444;
    display: block;
    padding: 10px;
    position: relative;
    margin-top: 0%;
}.dataTables_length{ 
margin-left:44%; }

.form-control form-control-sm{
  
  }

}
</style>
  <script>
  $(document).ready(function() {
  $('#example').DataTable();
  } );
  </script>


</body></html>


<script type="text/javascript">

  var  stateID=null;
  var id=null;
  var TaskID=null;
  var cityid=null;

</script>




<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="state"]').on('change', function() {

             stateID = $(this).val();
              var id= $(this).val();
              TaskID=$(this).val();

              cityid=$(this).val();
             // projectids=$(this).val();
              //  alert(id);

                $('#projectids').val(id);
                      $('#state_ID').val(stateID);

                       $('#Task_ids').val(TaskID);
             // id=$(this).val();
            // alert(TaskID);
           
            if(stateID) {
                $.ajax({
                    url: '/task-master/ajax/'+stateID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                 var arr=Array('<option value="">select </option>');
                        $('#city_id').empty();
                        $.each(data, function(key, value) {
                            arr.push('<option value="'+ key +'">'+  value.Module_Name +'</option>');
                        });


                      $('#city_id').append(arr);

                    }
                });

            }else{
                $('#city_id').empty();
            }
        });
    });





      $(document).ready(function() {
          var module_id = $(this).val();
        $('select[name="city"]').on('change', function() {
            var module_id = $(this).val();
           // alert(module_id);
                       var cityid = $(this).val();

            $('#state_ID').val(stateID);
              $('#state_ID').val(stateID);
             $('#city').val(cityid);
          alert(cityid);

            // alert(stateID);
            if(module_id) {
                $.ajax({
                    url: '/task-master/'+module_id,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                
                        $('select[name="task"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="task"]').append('<option value="'+ key +'">'+ value.Task_Name +'</option>');
                        });


                    }
                });
                
            }else{
                $('select[name="task"]').empty();
            }
        });
    });
</script>





<script type="text/javascript">
  $('#submit').click(function(){
    //alert('oke');
   
var formdata = new FormData($("#fromraiserticket")[0]);
    $.ajax({  
           type: "POST",  
           url: "{{URL::to('task-master')}}",
            //data : $('#project_m').serialize(),
            data : formdata,
           processData: false,
             contentType : false,
             success: function(msg){
       
          alert("data insertd Successfully");
      
           //console.log(msg);
             // location.reload();
            }
        }); 
  });
</script>



<script type="text/javascript">
  $('#Save_Task_Details').click(function(){
    //alert('oke');
   
var formdata = new FormData($("#projectform")[0]);
//alert(formdata);
    $.ajax({  
           type: "POST",  
           url: "{{URL::to('save-project-name')}}",
            //formdata : $('#projectform').serialize(),
            data : formdata,
           processData: false,
             contentType : false,
             success: function(msg){
       
          alert("data insertd Successfully");
      
           //console.log(msg);
             // location.reload();
            }
        }); 
  });
</script>


<script type="text/javascript">
  $('#Save_Task_Details2').click(function(){
    //alert('oke');
   
var formdata = new FormData($("#taskform")[0]);
//alert(formdata);
    $.ajax({  
           type: "POST",  
           url: "{{URL::to('save-project-task')}}",
            //formdata : $('#projectform').serialize(),
            data : formdata,
           processData: false,
             contentType : false,
             success: function(msg){
       
          alert("data insertd Successfully");
      
           //console.log(msg);
             // location.reload();
            }
        }); 
  });
</script>










<script type="text/javascript">
  $('#Save_Task_Details1').click(function(){
    //alert('oke');
   
var formdata = new FormData($("#saveproject")[0]);
    $.ajax({  
           type: "post", 
           url: "{{URL::to('save-project-module')}}",
            //data : $('#project_m').serialize(),
            data : formdata,
             processData: false,
             contentType : false,
             success: function(msg){
       
          alert("data insertd Successfully");
      
           //console.log(msg);
             // location.reload();
            }
        }); 
  });
</script>


  <script>
  $(document).ready(function() {
  $('#example').DataTable();
  } );
  </script>

 
</body>
</html>
