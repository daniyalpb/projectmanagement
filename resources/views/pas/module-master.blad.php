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
         <center><h3 class="box-title">Project Master</h3></center> 
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
          <form name="project_m" id="project_m">
           {{ csrf_field() }}     

        

                  

              <div class="form-group row">
                <label for="Break_Type" class="col-sm-3 col-form-label"><b>Project&nbsp;Name:</b></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="project_name" name="project_name"  placeholder="Project Name" required>
                

                 <label class="control-label" for="inputError"><span id="err_project_name" class="error_class"></span></label>
                 </div>
   <!--              <span id="err_project_name" class="error_class"></span> -->
              <br><br>
                 <div class="form-group row">
                <label for="Description" class="col-sm-3 col-form-label"><b>Description</b></label>
                <div class="col-sm-8">
                  <textarea type="text" class="form-control" id="description" name="description"  placeholder="Description" required></textarea>
                

                 <label class="control-label" for="inputError"><span id="err_project_name" class="error_class"></span></label>
                 </div>



                    <br><br>
                 <div class="form-group row">
                <label for="Owner" class="col-sm-3 col-form-label"><b>Owner</b></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="Owner" name="Owner"  placeholder="Owner" required>
                

                 <label class="control-label" for="inputError"><span id="err_project_name" class="error_class"></span></label>
                 </div>
              </div>





                   <div class="form-group row">
                   <label for="Owner" class="col-sm-3 col-form-label"><b>Date:</b></label>
                   <div class="col-sm-8">
                   <input type="text" class="form-control datepicker_id" id="date_of_joining" name="date_of_joining"  placeholder="Date"  required>
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
var formdata = new FormData($("#project_m")[0]);
    $.ajax({  
           type: "POST",  
           url: "{{URL::to('project-master-form')}}",
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
