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


<form method="post" id="formhome"  name="formhome" enctype="multipart/form-data" >
{{ csrf_field() }}



   <div class="button-group">
   <div class="col-md-2 col-xs-12">
    <a  data-toggle="dropdown" aria-expanded="true" >Project</a>
   <ul class="dropdown-menu" id="projectid" style="min-width: 24rem;   height: 250px; overflow: auto;">
  <input type="text" id="project" onkeyup="ProjectFunction()" placeholder="Search for Projects.." title="Type in a name">
 @foreach($query as $val)
  <li style="font-size: 17px;"><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox" name="rto_id[]" id="rto_id" value="{{$val->project_name}}" style="margin: 4px 7px 0;" />{{$val->project_name}}</a></li>
    @endforeach
    </ul>
     </div>
    </div>




   <div class="button-group">
   <div class="col-md-2 col-xs-12" >
    <a  data-toggle="dropdown" aria-expanded="true">Issue Type</button>
    <ul class="dropdown-menu" id="myissue" style="min-width: 24rem;   height: 250px; overflow: auto;">
   <input type="text" id="myissueinput" onkeyup="IssueFunction()" placeholder="Search for Status.." title="Type in a name">
    @foreach($data as $val)
    <li style="font-size: 17px;"><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox" name="rto_id[]" id="rto_id" value="{{$val->Issues}}" style="margin: 4px 7px 0;" />{{$val->Issues}}</a></li>
    @endforeach
      </ul>
     </div>
    </div>






   <div class="button-group">
   <div class="col-md-2 col-xs-12">
    <a  data-toggle="dropdown" aria-expanded="true" >Tag User</a>
    <ul class="dropdown-menu" id="projectid" style="min-width: 24rem;   height: 250px; overflow: auto;">
    <input type="text" id="project" onkeyup="ProjectFunction()" placeholder="Search for Projects.." title="Type in a name">
    @foreach($taguser as $val)
    <li style="font-size: 17px;"><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox" name="rto_id[]" id="rto_id" value="{{$val->emp_name}}" style="margin: 4px 7px 0;" />{{$val->emp_name}}</a></li>
    @endforeach
      </ul>
     </div>
    </div>







   <div class="button-group">
   <div class="col-md-2 col-xs-12">
    <a    data-toggle="dropdown" aria-expanded="true">Status All</a>
    <ul class="dropdown-menu" id="mystatus" style="min-width: 24rem;   height: 250px; overflow: auto;">
   <input type="text" id="mystausinput" onkeyup="statusFunction()" placeholder="Search for Status.." title="Type in a name">
  @foreach($status as $val)
    <li style="font-size: 17px;"><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox" name="rto_id[]" id="rto_id" value="{{$val->Status}}" style="margin: 4px 7px 0;" />{{$val->Status}}</a></li>
    @endforeach
      </ul>
     </div>
    </div>




  <div class="button-group">
  <div class="col-md-2 col-xs-12">
  <a class="" data-toggle="dropdown" aria-expanded="true">Status All
   </a>
    <ul class="dropdown-menu" id="myUL" style="min-width: 24rem;   height: 250px; overflow: auto;">
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for status.." title="Type in a name">
    @foreach($status as $val)

    <li style="font-size: 17px;"><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox" name="rto_id[]" id="rto_id" value="{{$val->Status}}" style="margin: 4px 7px 0;" />{{$val->Status}}</a></li>
    @endforeach
      </ul>
     </div>
    </div>



   <div class="button-group">
   <div class="col-md-2 col-xs-12">
    <a data-toggle="dropdown" aria-expanded="true">Reporter</a>
    <ul class="dropdown-menu" id="Reporter" style="min-width: 24rem;   height: 250px; overflow: auto;">
   <input type="text" id="Reporterinput" onkeyup="ReporterFunction()" placeholder="Search for Reportee.." title="Type in a name">

    @foreach($reporterdata as $val)
    <li style="font-size: 17px;"><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox" name="rto_id[]" id="rto_id" value="{{$val->Reporter}}" style="margin: 4px 7px 0;" />{{$val->Reporter}}</a></li>
    @endforeach
      </ul>
     </div>
    </div>



   <div class="button-group">
   <div class="col-md-2 col-xs-12">
    <a data-toggle="dropdown" aria-expanded="true">Assign</a>
    <ul class="dropdown-menu" id="assignee" style="min-width: 24rem;   height: 250px; overflow: auto;">
   <input type="text" id="Assigninput" onkeyup="AssignFunction()" placeholder="Search for Reportee.." title="Type in a name">

    @foreach($reporterassign as $val)
    <li style="font-size: 17px;"><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox" name="rto_id[]" id="rto_id" value="{{$val->assignee}}" style="margin: 4px 7px 0;" />{{$val->assignee}}</a></li>
    @endforeach
      </ul>
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
        <input type="button" name="submit"  style="margin-top:%" id="submit" value="Submit Task" class="btn btn-primary">
        </center>
        </div>

<!-- 
<div class="content">
    <div class="box box-default">
        <div class="box-header with-border">
         <center><h3 class="box-title"></h3></center>  -->

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>


                 <table class="table table-bordered">
                <thead>
                  <tr>
                   <!--  <th>Sr.No</th>  -->
                     <th>Sr No</th> 
                    <th>Project Name</th> 
                    <th>Issues</th>
                    <th>Employee Name</th>
                    <th>Status</th>
                    <th>Reporter</th>
                    <th>Assignee</th>
                                                
                  </tr>
                </thead>
                <tbody>

               @foreach($homes as $val)
                <tr>
                <td>{{$val->id}} </td>
                <td>{{$val->project_name}} </td>
                <td>{{$val->Issues}} </td>
                <td>{{$val->emp_name}} </td>
                @if($val->Status=='done')
                <td style="color:#006400;">{{$val->Status}}</td>
                @else
               <td>{{$val->Status}} </td>
                @endif
                <td>{{$val->Reporter}} </td>
                <td>{{$val->assignee}}</td>
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




<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}


.main-footer {
    background: #fff;
    padding: 15px;
    color: #444;
    border-top: 1px solid #d2d6de;
    margin-top: 18%;
}

</style>

<script type="text/javascript">
  $('#submit').click(function(){
    //alert('oke');
    $(".error_class").empty();
    $(".success_class").empty();
   var formdata = new FormData($("#formhome")[0]);
    $.ajax({  
    type: "POST",  
    url: "{{URL::to('home-master-insert')}}",
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


<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
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
function statusFunction() {
   var input, filter, ul, li, a, i, txtValue;
 input = document.getElementById("mystausinput");
filter = input.value.toUpperCase();
    ul = document.getElementById("mystatus");
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


function IssueFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myissueinput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myissue");
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
function AssignFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("Assigninput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("assignee");
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
