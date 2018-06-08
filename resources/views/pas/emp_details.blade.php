@extends('include.master')

@section('content')

  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Performance Appraisal System - 2018</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

 


        <div class="box-body">
       <div class="row">
        <div class="col-xs-12">
            <form action="{{url('asp-insert')}}" method="post" id="pas_from_id">{{csrf_field()}}
 
 
                <div class="col-sm-6 col-sm-offset-2" id="textfiledpas">
            
                
                  <div class="form-group row">
                        <spane for="Break_Type" class="col-sm-4 col-form-label">Name of the Employee</spane>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="empname" name="empname" value="{{Session::get('username')}}"  required>
                        </div>
                      </div>


                       <div class="form-group row">
                        <spane for="Break_Type" class="col-sm-4 col-form-label">Designation</spane>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="designation" name="designation"   required>
                        </div>
                      </div>
                     
                     <div class="form-group row">
                        <spane for="Break_Type" class="col-sm-4 col-form-label">Function</spane>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="function" name="function"   required>
                        </div>
                      </div>
 
 

                      <div class="form-group row">
                        <spane for="Time" class="col-sm-4 col-form-label">Reporting Manager:</spane>
                        <div class="col-sm-8">
                          <select  class="form-control" id="rm" name="rm" >
                          <option   selected  value="0" >Select&nbsp;RM</option>
                           @foreach($query as $val)
                          <option value="1">{{$val->GroupName}}</option>
                           
                          @endforeach
                        </select>
                        </div>
                      </div>




                 
                </div>
                

                      
 
             
            </form>
           </div>
         </div>
     </div>
  </div>
</div>
 
 <script type="text/javascript">
   
   $(document).on('click','.textfiledpasbtn',function(event){  event.preventDefault();



                       var id=$(this).attr('href');
                         if(id==0){
                           if($('#empname').val()!=0 && $('#designation').val()!=0 && $('#function').val()!=0 && $('#rm').val()!=0 ){
                                  $('#textfiledpas').hide();
                                  $('#ratingtbl').show();
                           }else{

                             alert("Please fill out this form carefully...");
                           }
 
                         }else if(id==1){
                          $('#textfiledpas').show();
                          $('#ratingtbl').hide();
                         }else if(id==2){
                           
                             fdate=$('#pas_from_id').serialize();
                             $.post("{{url('asp-insert')}}",fdate).done(function(data){
                               console.log(data);
                               }).fail(function(xhr, status, error) {
                                     console.log(error);
                                });

                         

                         }

                     });
    
 </script>
 
 
<style type="text/css">
#num_text {width:100%; padding:5px;border-radius:5px; border:1px solid #ccc;}
  .checkbox-star {
  border: 0;
  width: 1px;
  height: 1px;
  overflow: hidden;
  position: absolute !important;
  clip: rect(1px 1px 1px 1px);
  clip: rect(1px, 1px, 1px, 1px);
  opacity: 0;
}

label {
  position: relative;
  float: right;
  color: #C8C8C8;
}

label:before {
  margin: 5px;
  content: "\f005";
  font-family: FontAwesome;
  display: inline-block;
  font-size: 1.5em;
  color: #ccc;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}

.checkbox-star:checked ~ label:before {
  color: #FFC107;
}

label:hover ~ label:before {
  color: #ffdb70;
}

label:hover:before {
  color: #FFC107;
}
</style>
@endsection