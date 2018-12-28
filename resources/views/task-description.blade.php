@extends('include.master')
@section('content')
<style>
.error_class{
  color:red;
}
.success_class{
  color:green;
}
</style>
 <div class="content">
    <div class="box box-default">
        <div class="box-header with-border">
         <center><h3 class="box-title">Task Description</h3></center> 
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

        <div class="box-body">
      <!-- <center><h3 style="color: #0099FF;">State Master</h3></center><hr> -->
          <div class="row">  <!-- for center -->
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-6 col-sm-offset-2">
          <form name="project_master" id="project_master" method="post">
           {{ csrf_field() }}                       

                    
        <div class="form-group row">
            <label class="col-sm-3 col-form-label"><b>Project Name:</b></label> 
         <div class="col-md-8">
          <select class="selectpicker select-opt form-control" id="project_id" name="project_id"  required>
              <option selected disabled value="">Select Project</option>
              @foreach($data as $val)
              <option value="{{$val->id}}">{{$val->project_name}}</option>
            @endforeach
           </select>
            <label class="control-label" for="inputError"><span id="err_project_id" class="error_class"></span></label>
          </div>
        </div><br><br>


        <div class="form-group row">
                <label for="Break_Type" class="col-sm-3 col-form-label"><b>Task&nbsp;Name:</b></label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="task_name" name="task_name"  placeholder="Task Name" required>
                   <label class="control-label" for="inputError"><span id="err_task_name" class="error_class"></span></label>
                </div>
              </div><br><br> 

               <div class="form-group row">
                <label for="Break_Type" class="col-sm-3 col-form-label"><b>Task&nbsp;Description:</b></label>
                <div class="col-md-8">
                  <textarea type="text" class="form-control" id="description" name="description"  placeholder="description" style="min-width: 500px; height: 250px;" required></textarea>
                   <label class="control-label" for="inputError"><span id="err_description" class="error_class"></span></label>
                </div>
              </div><br><br>



            @if(Session::has('error-msg'))
              <div class="alert alert-danger"> 
                  {!! session('error-msg') !!}
              </div>
            @endif
            @if(Session::has('success-msg'))
              <div class="alert alert-success"> 
                  {!! session('success-msg') !!}
              </div>
            @endif

           <div class="col-md-12">
             <div class="col-md-12 success_class" id="success_response"> 

              </div>
               <center>
              <input type="button" name="submit" id="submit" value="Submit Task" class="btn btn-primary">
            </center>
            </div>
            <br>
              </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>


<script type="text/javascript">
  $('#submit').click(function(){
    
    alert('oke');
    $(".error_class").empty();
    $(".success_class").empty();
     var formdata = new FormData($("#project_master")[0]);
    $.ajax({  
           type: "POST",  
           url: "{{URL::to('task-description-form')}}",
            //data : $('#project_m').serialize(),
            data : formdata,
           processData: false,
             contentType : false,
             success: function(msg){
                   var response = JSON.parse(msg);
                    if(response.status == "success"){
                       $("#success_response").html(response.messege);
          window.location = response.redirectUrl;
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
@endsection