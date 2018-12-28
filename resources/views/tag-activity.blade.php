@extends('include.master')
@section('content')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<p class="alert alert-success">{{ Session::get('message') }}</p>
</div>
@endif
<div class="container-fluid white-bg">
<div class="col-md-12"><h3 class="mrg-btm">Tag Activity</h3></div>
<div class="col-md-12">


<form method="post" id="formtagactivity"  name="formtagactivity" enctype="multipart/form-data" >
{{ csrf_field() }}

             
 <div class="form-group">
  <div class="col-md-3 col-xs-12" >
  <select name="project_name"  class="form-control"  id="project_id">
  <option value="0">Project Name</option>
  @foreach($users as $val)
  <option value="{{$val->project_name}}">{{$val->project_name}}</option>
  @endforeach
  </select>
  </div>
  </div>






<div class="col-md-3  col-xs-12" >
 <div class="form-group">
 <input class="form-control"  name="Moduel_Name" id="Moduel_Name"  required="yes" placeholder="Module Name" >
</div>
</div>




 
 <div class="col-md-3  col-xs-12" >
 <div class="form-group">
 <input class="form-control"  name="Task_Name" id="Task_Name"  required="yes" placeholder="Task Name" >
</div>
</div>





<div class="col-md-3  col-xs-12" >
 <div class="form-group">
 <input class="form-control"  name="Subtask_Name" id="Subtask_Name"  required="yes" placeholder="SubTask Name" >
</div>
</div>



<div class="col-md-3  col-xs-12" >
 <div class="form-group">
 <input class="form-control" name="Remark" id="Remark" placeholder="Remark...." >
</div>
</div>



   <div class="button-group">
   <div class="col-md-3 col-xs-12">
    <button  type="button" class="btn btn-default btn-sm dropdown-toggle form-control" data-toggle="dropdown">SELECT --</button>
    <ul class="dropdown-menu" style="min-width: 24rem;   height: 250px; overflow: auto;">
    @foreach($data as $val)
    <li style="font-size: 17px;"><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox" name="rto_id[]" id="rto_id" value="{{$val->emp_name}}" style="margin: 4px 7px 0;" />{{$val->emp_name}}</a></li>
    @endforeach
      </ul>
     </div>
    </div>



  <div class="col-md-3 col-xs-12">
   <div class="form-group">
  <div class="form-control">Completed&nbsp;&nbsp;&nbsp;
 
<input type="radio" name="Completed" value="Yes">&nbsp;&nbsp;Yes <input type="radio" name="Completed" value="No">&nbsp;&nbsp;No</div>
  </div>
  </div>
  

 <div class="col-md-3  col-xs-12">
 <div class="form-group">
  <input type="text" class="form-control datepicker_id" id="date_of_joining" name="date_of_joining"  placeholder="Tagged Date"  required>
  <label class="control-label" for="inputError"><span id="err_date_of_joining" class="error_class"></span></label>
  </div>
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


            <input type="hidden" name="hdnid"  id="hdnid" >

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


<!-- <script type="text/javascript">
  $('#submit').click(function(){
    //alert('oke');
    $(".error_class").empty();
    $(".success_class").empty();
var formdata = new FormData($("#formtagactivity")[0]);
    $.ajax({  
           type: "POST",  
           url: "{{URL::to('tag-activity-insert')}}",
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
</script> -->



<script type="text/javascript">
 $('#submit').click(function() {


    var checkstring=[];
  $('input[type=checkbox]').each(function(){
    if($(this).prop('checked'))
      checkstring.push($(this).val());
  });
  var hdnid = checkstring.join(',');
  $('#hdnid').val(hdnid);
  // $("input:hdnid").val("checkstring");
  //console.log(checkstring);
$.ajax({ 
url: "{{URL::to('tag-activity-insert')}}",
method:"POST",
data: $('#formtagactivity').serialize(),
success: function(msg) 

 {
 //console.log(msg);
 alert("Record has been saved successfully");
 $("#formtagactivity").trigger('reset');
 }
 });
});
</script>
<script>
  var options = [];
$( '.dropdown-menu a' ).on( 'click', function( event ) {

   var $target = $( event.currentTarget ),
       val = $target.attr( 'data-value' ),
       $inp = $target.find( 'input' ),
       idx;

   if ( ( idx = options.indexOf( val ) ) > -1 ) {
      options.splice( idx, 1 );
      setTimeout( function() { $inp.prop( 'checked', false ) }, 0);
   } else {
      options.push( val );
      setTimeout( function() { $inp.prop( 'checked', true ) }, 0);
   }

   $( event.target ).blur();
      
   //console.log( options );
   return false;
});
</script>

@endsection