
@extends('include.master')
 @section('content')
 <style type="text/css">
  element.style {   margin: 0px 10px 10px 233px;  overflow: hidden;  } 
</style>
<!-- Body Content Start -->
  <div id="content" style="overflow:scroll;">
  <div class="container-fluid white-bg">
  <div class="col-md-12"><h3 class="mrg-btm">SEND SMS</h3></div>
  <!-- Date Start --> 
  <form  id="sendsms" name="sendsms" action="POST"> 
    {{ csrf_field() }}
   <div id="message_toggle">
    @if($message = Session::get('msg'))
  <div class="alert alert-info alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">×</span>
  </button>
  <strong>{{$message}}</strong> 
  </div>
    @endif
  </div>
  
  </div> 
  <div class="col-md-4 col-sm-4 col-xs-12">
  <h4 style="margin-left: 45%;">Project Name</h4>
  <div class="form-group">
  <select  class="form-control select-sty" name="project_name" id="project_name">    
  </select>
  </div>
  </div>

  <div class="col-md-4 col-sm-4 col-xs-12">
  <h4>Module Name</h4>
  <div class="form-group">
  <select " class="form-control select-sty" name="Module_Name[]" id="Module_Name" >    
  </select>
 
  </div>
  </div>



<div class="col-md-4 col-sm-4 col-xs-12">
<h4 style="text-align: center;">Task Name</h4>
<div class="form-group">
<select  class="form-control select-sty" name="Task_Name[]" id="Task_Name">
</select>

</div>
</div>
 

  

<div class="form-group"> 
<a href="#" class="mrg-top common-btn" id="search_fba_date" name="search_fba_date">SHOW</a>   </div>
</div>
</form>

</div>
</form>
</div>
</div>

<script type="text/javascript">

$.ajax({ 
 url: "{{URL::to('send-sms-zone')}}",
 method:"GET",
 success: function(datas)  
 {
 var data=$.parseJSON(datas);
 // console.log(data);
 if(data)
 { $.each(data, function( index, value ) {
 $('#zone').append('<option value="'+value.zone+'">'+value.zone+'</option>');
 }); 
 }else{
  $('#zone').empty().append('No Result Found');
  }
  },
  });
 $.ajax({ 
 url: "{{URL::to('send-sms-zonechange')}}",
 method:"POST",
 success: function(datas)  
 {
 var data=$.parseJSON(datas);
 // console.log(data);
 if(data)
 { $.each(data, function( index, value ) {
 $('#zone').append('<option value="'+value.state_id+'">'+value.state_name+'</option>');
 }); 
 }else{
  $('#zone').empty().append('No Result Found');
  }
  },
  });
 $.ajax({ 
 url: "{{URL::to('send-sms-state')}}",
 method:"GET",
 success: function(datas)  
 {
 var data=$.parseJSON(datas);
 // console.log(data);
 if(data)
 { $.each(data, function( index, value ) {
 $('#state').append('<option value="'+value.state_id+'">'+value.state_name+'</option>');
 }); 
 }else{
  $('#state').empty().append('No Result Found');
  }
  },
  });

  $('#zone').on('change', function() {
  $("#state").empty().append('');
   // alert('okae');
  var state=$('#zone').find(":selected").val();
  // console.log(state);
  var array = "";
  var i=0;
  $('#zone  option:selected').each(function() {
  array+= $(this).val()+"";
  });
  console.log(array);
  var v_token ="{{csrf_token()}}";
  $.ajax({  
  type: "POST",  
  url: "{{URL::to('send-sms-zonechange')}}",
  data : {'_token': v_token,'zone':array},
  success: function(msg){
  console.log(msg);
  if(msg)
  { $.each(msg, function( index, value ) {
  $('#state').append('<option value="'+value.state_id+'">'+value.state_name+'</option>');   
  }); 
  }else{
  $('#state').empty().append('No Result Found');
  }
  }  
  });
  });
  $('#state').on('change', function() {
  $("#city").empty().append('');
   // alert('okae');
  var state=$('#state').find(":selected").val();
  var array = "";
  var i=0;
  $('#state  option:selected').each(function() {
  array+= $(this).val()+",";
  });
  console.log(array);
  var v_token ="{{csrf_token()}}";
  $.ajax({  
  type: "POST",  
  url: "{{URL::to('send-sms-city')}}",
  data : {'_token': v_token,'state':array},
  success: function(msg){
  console.log(msg);
  if(msg)
  { $.each(msg, function( index, value ) {
   $('#city').append('<option value="'+value.cityname+'">'+value.cityname+'</option>');   
   }); 
   }else{
   $('#city').empty().append('No Result Found');
   }
   }  
   });
   });
</script>