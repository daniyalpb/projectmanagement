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
<div class="col-md-12"><h3 class="mrg-btm">Task Master</h3></div>
<div class="col-md-12">


<form method="post" id="formTaskmaster"  name="formTaskmaster" enctype="multipart/form-data" >
{{ csrf_field() }}

                  



 <div class="form-group">
  <div class="col-xs-4">
  <select name="project_name"  class="form-control"  id="project_id">
  <option value="0">Project Name</option>
  @foreach($data as $val)
  <option value="{{$val->project_name}}">{{$val->project_name}}</option>
  @endforeach
  </select>
  </div>
  </div> 
  


<div class="col-md-4  col-xs-12">
 <div class="form-group">
<input class="form-control" name="Task_Name" id="Task_Name"  required="yes" placeholder="Task Name"  >

 </div>
 </div>



 <div class="col-md-4  col-xs-12">
 <div class="form-group">
  <input type="text" class="form-control datepicker_id" id="CreateDate" name="CreateDate"  placeholder="Date"  required>
  <label class="control-label" for="inputError"><span id="err_date_of_joining" class="error_class"></span></label>
  </div>
  </div>
  </div>


<div class="col-md-4  col-xs-12" style="width:50% height:20%" >
 <div class="form-group">
 <textarea class="form-control" name="Description" id="Description" placeholder="Description...." ></textarea>
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

@endsection
