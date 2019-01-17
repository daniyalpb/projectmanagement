@extends('include.master')
@section('content')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<p class="alert alert-success">{{ Session::get('message') }}</p>
</div>
@endif
<div class="container-fluid white-bg">
<div class="col-md-12"><h3 class="mrg-btm">Sub Task Master</h3></div>
<div class="col-md-12">


<form method="post" id="formsubTaskmaster"  name="formsubTaskmaster" enctype="multipart/form-data" >
{{ csrf_field() }}



   <div class="button-group">
   <div class="col-md-4 col-xs-12">
    <input  data-toggle="dropdown"   class="form-control" aria-expanded="true"  placeholder="project Name">
    <ul class="dropdown-menu" id="projectid" style="min-width: 24rem;   height: 250px; overflow: auto; margin-left: 1vw; width: 24vw;" >
    <input type="text" id="project" onkeyup="ProjectFunction()" placeholder="Search for Projects.." title="Type in a name">
    @foreach($data as $val)
    <li style="font-size: 17px;"><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox" name="rto_id[]" id="rto_id" value="{{$val->project_name}}" style="margin: 4px 7px 0;" />{{$val->project_name}}</a></li>
    @endforeach
      </ul>
     </div>
    </div>





<div class="col-md-4  col-xs-12">
 <div class="form-group">
<input class="form-control" name="Subtask_Name" id="Subtask_Name"  required="yes" placeholder="Task Name"  >

 </div>
 </div>



 <div class="col-md-4  col-xs-12">
 <div class="form-group">
  <input type="text" class="form-control datepicker_id" id="CreateDate" name="CreateDate"  placeholder="Date"  required>
  <label class="control-label" for="inputError"><span id="err_date_of_joining" class="error_class"></span></label>
  </div>
  </div>
  </div>









 <div class="form-group">
  <div class="col-xs-4">
  <select name="Status"  class="form-control"  id="Status">
  <option value="0">Status</option>
    <option id="WIP"  value="WIP"> Open</option>

  <option id="WIP"  value="WIP"> Working in progress</option>
    <option id="done"  value="Complete ">Complete</option>
   <option id="indev"  value="InDev ">In Devlopement</option>
  </select>
  </div>
  </div> 




<div class="col-md-4  col-xs-12" style="width:50% height:20%" >
 <div class="form-group">
 <textarea class="form-control" name="Description" id="Description" placeholder="Description...." ></textarea>
</div>
</div>



<div class="col-md-4  col-xs-12" >
 <div class="form-group">
 <input class="form-control" name="Remark" id="Remark" placeholder="Remark...." >
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
var formdata = new FormData($("#formsubTaskmaster")[0]);
    $.ajax({  
           type: "POST",  
           url: "{{URL::to('subtask-master-insert')}}",
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


  function ProjectFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("project");
    filter = input.value.toUpperCase();
    ul = document.getElementById("projectid");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>






@endsection
