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
   <div class="col-md-2 col-xs-12" >
    <a  data-toggle="dropdown" aria-expanded="true">Issue Type</a>
    <ul class="dropdown-menu" id="myissues" style="min-width: 24rem;   height: 250px; overflow: auto;">
   <input type="text" id="myissueinputt" onkeyup="IssuesFunction()" placeholder="Search for Status.." title="Type in a name">

    @foreach($data as $val)
    <li style="font-size: 17px;"><a href="/openissues-view/{{$val->id}}" class="small" data-value="option1" tabIndex="-1">{{$val->Issues}}</a></li>
    @endforeach
      </ul>
     </div>
    </div>



   <div class="button-group">
   <div class="col-md-2 col-xs-12" >
    <a  data-toggle="dropdown" aria-expanded="true">Search Filter</a>

    <ul class="dropdown-menu" id="myissue" style="min-width: 24rem;   height: 250px; overflow: auto;">
   <input type="Search" id="myissueinput" onkeyup="IssueFunction()" placeholder="Search for Status.." title="Type in a name">



    <li style="font-size: 17px;"><a href="/unrelesed" class="small" data-value="option1" tabIndex="-1">Unrelesed </a></li>



    <li style="font-size: 17px;"><a href="/view-all-bug" class="small" data-value="option1" tabIndex="-1">All Issues</a></li>

    <li style="font-size: 17px;"><a href="/open-issues" class="small" data-value="option1" tabIndex="-1">Done</a></li>


    <li style="font-size: 17px;"><a href="/open-bug-issue" class="small" data-value="option1" tabIndex="-1">Open</a></li>

    <li style="font-size: 17px;"><a href="/view-recently" class="small" data-value="option1" tabIndex="-1">View Recently</a></li>

    <li style="font-size: 17px;"><a href="/recently-resolved" class="small" data-value="option1" tabIndex="-1">Recently Resolved</a></li>



   
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
        <input type="button" name="submit"  style="margin-top:12%" id="submit" value="Submit Task" class="btn btn-primary">
        </center>
        </div>




</body>
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


function IssuesFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myissueinputt");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myissues");
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
function ReporterFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("Reporterinput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("Reporter");
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


<!-- 
[
send Otp 
Send Notification
send sms
Ticket Management-
Assign Ticket 
Ticket Request
Fba list -
Health Assure
Update Fba Master
repots -dashboard Lead Status reports. Rupeeboss
SME Loan -bt Loan Audit(rupeeboss)-
self Emplyoed
Salaried

Task Management(new Project working in progress)
User Details
User Master
project Master
Project Details
Assign Project
Assign Bug
Module Master
Task Master
SubTask Master
Bug Master
Relese Master
Tag User
Task Description
Assign Task  ]

 -->