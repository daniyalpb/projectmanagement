@extends('include.master')
@section('content')
)
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<p class="alert alert-success">{{ Session::get('message') }}</p>
</div>
@endif
<div class="container-fluid white-bg">
<div class="col-md-12"><h3 class="mrg-btm">Bug Activity</h3></div>
<div class="col-md-12">


<form method="post" id="fromraiserticket"  name="frombut" enctype="multipart/form-data" >
{{ csrf_field() }}


 <div class="form-group">
  <div class="col-md-3">
  <select name="project_name"  class="form-control"  id="project_id">
  <option value="0">Project Name</option>
  @foreach($data as $val)
  <option value="{{$val->project_name}}">{{$val->project_name}}</option>
  @endforeach
  </select>
  </div>
  </div> 



 <div class="col-md-3  col-xs-12">
 <div class="form-group">
 <input class="form-control" name="Module_Name" id="Module_Name"  required="yes" placeholder="Module Name"  >
 </div>
 </div>




<div class="col-md-3  col-xs-12">
 <div class="form-group">
<input class="form-control" name="TaskName" id="TaskName"  required="yes" placeholder="Task Name"  >
</div>
 </div>


 
<div class="col-md-3  col-xs-12">
 <div class="form-group">
<input class="form-control" name="SubTask_Name" id="SubTask_Name"  required="yes" placeholder="SubTask Name"  >
 </div>
 </div>



  <div class="col-md-3 col-xs-12">
  <div class="form-group">
  <select   name="Issues"  class="form-control"  id="project_id">
  <option value="Priority" >Priority</option>
  <option value="Minor">Major</option>
 <option value="Major">Minor</option>

  
  </select>
  </div>
  </div> 


 <div class="col-md-3  col-xs-12">
 <div class="form-group">
  <input type="text" class="form-control datepicker_id" id="CreateDate" name="CreateDate"  placeholder="Due Date"  required>
  <label class="control-label" for="inputError"><span id="err_date_of_joining" class="error_class"></span></label>
  </div>
  </div>




  <div class="col-md-3 col-xs-12">
  <div class="form-group">
  <select name="emp_name"  class="form-control"  id="project_id">
  <option value="0">Assignee</option>
  @foreach($empdata as $val)
  <option value="{{$val->emp_name}}">{{$val->emp_name}}</option>
  @endforeach
  </select>
  </div>
  </div> 




  <div class="col-md-3 col-xs-12">
  <div class="form-group">

  <select name="Reporter"  class="form-control"  id="project_id">
  <option value="0">Reporter</option>
  @foreach($reporterdata as $val)
  <option value="{{$val->Reporter}}">{{$val->Reporter}}</option>
  @endforeach
  </select>
  </div>
  </div> 





<div class="col-md-3  col-xs-12">
<div class="form-group ">
<textarea class="form-control" name="Environment" id="Environment" placeholder="Environment...." ></textarea>
<label class="control-label" for="inputError"><span id="err_date_of_joining" class="error_class"></span></label>
</div>
</div>



<div class="col-md-3  col-xs-12" >
<div class="form-group">
 <textarea class="form-control" name="Description" id="Description" placeholder="Description...." ></textarea>
<label class="control-label" for="inputError"><span id="err_date_of_joining" class="error_class"></span></label>
</div>
</div>







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



            
               <div class="col-sm-12">

                 <div class="col-md-12 success_class fadeso" id="success_response"> 

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

<style type="text/css">
  textarea.form-control {
    height: auto;
    margin-left: -227%;
}
</style>

<script type="text/javascript">
  $('#submit').click(function(){
    //alert('oke');
    $(".error_class").empty();
    $(".success_class").empty();
var formdata = new FormData($("#fromraiserticket")[0]);
    $.ajax({  
           type: "POST",  
           url: "{{URL::to('bug-activity-insert')}}",
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

@endsection
