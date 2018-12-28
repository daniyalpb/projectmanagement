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
         <h3 class="box-title">User Master</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

        

 <div class="box-body">
  <!-- <center><h3 style="color: #0099FF;">Employee Master</h3></center><hr> -->
          <div class="row">  <!-- for center -->
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
              <!-- a -->
            <form class="form-horizontal" name="User_Form" id="User_Form"  method="post">
              {{csrf_field()}}
          

                  <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empcode" class="col-sm-4 col-form-label">User Name:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="name" name="name" placeholder="Name"  value='{{$user[0]->name}}' required>
                          <label class="control-label" for="inputError"><span id="err_empcode" class="error_class"></span></label>
                        </div>
                      </div>
                  </div>



                  <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empname" class="col-sm-4 col-form-label">Email:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="email" name="email" placeholder="Email" value='{{$user[0]->email}}'  required>
                          <label class="control-label" for="inputError"><span id="err_empname" class="error_class"></span></label>
                        </div>
                      </div>
                    </div>





                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="address" class="col-sm-4 col-form-label">Mobile:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="mobile" name="mobile" value='{{$user[0]->mobile}}' placeholder="Address" required>
                          <label class="control-label" for="inputError"><span id="err_address" class="error_class"></span></label>
                        </div>
                      </div>
                    </div>




    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="address" class="col-sm-4 col-form-label">Created date:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="Created_Date" name="Created_Date" value='{{$user[0]->Created_Date}}'  placeholder="Address" required>
                          <label class="control-label" for="inputError"><span id="err_address" class="error_class"></span></label>
                        </div>
                      </div>
                    </div>

        
                    

                <div class="col-md-6">
                   <div class="form-group row">
                        <label for="mobile" class="col-sm-4 col-form-label">Login Date:</label>
                        <div class="col-sm-6">
                          <input type="mobile" class="form-control " id="last_login_date" name="last_login_date"   placeholder="Login Date" value='{{$user[0]->last_login_date}}'   required>
                          <label class="control-label" for="inputError"><span id="err_mobile" class="error_class"></span></label>
                        </div>
                      </div>
                    </div>



                <div class="col-md-12 success_class" id="success_response">        
                 </div>

                 <center><div class="col-sm-12">
                   <button type="button" id="submit" name="submit" class="btn btn-primary">Submit</button>
                  <input type="Reset" value="Reset" class="btn btn">
          </div></center>
        </form>
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
     var formdata = new FormData($("#User_Form")[0]);
    $.ajax({  
           type: "POST",  
           url: "{{URL::to('user-details-insert')}}",
            //data : $('#project_m').serialize(),
            data : formdata,
           processData: false,
             contentType : false,
             success: function(msg){
                   var response = JSON.parse(msg);
                    if(response.status == "success"){
                      $("#success_response").html(response.messege);
                 //window.location = response.redirectUrl;
                  $("#User_Form").trigger('reset');
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