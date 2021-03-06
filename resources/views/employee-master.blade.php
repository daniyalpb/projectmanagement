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
         <h3 class="box-title">Employee Master</h3>
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
            <form class="form-horizontal" name="employee_form" id="employee_form"  method="post">
              {{csrf_field()}}
          

                  <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empcode" class="col-sm-4 col-form-label">Employee&nbsp;Code:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="empcode" name="empcode" placeholder="Employee Code"  required>
                          <label class="control-label" for="inputError"><span id="err_empcode" class="error_class"></span></label>
                        </div>
                      </div>
                  </div>



                  <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empname" class="col-sm-4 col-form-label">Employee&nbsp;Name:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="empname" name="empname" placeholder="Employee Name"  required>
                          <label class="control-label" for="inputError"><span id="err_empname" class="error_class"></span></label>
                        </div>
                      </div>
                    </div>





                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="address" class="col-sm-4 col-form-label">Address:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
                          <label class="control-label" for="inputError"><span id="err_address" class="error_class"></span></label>
                        </div>
                      </div>
                    </div>


                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">Email Id:</label>
                         <div class="col-sm-6">
                          <input type="text" class="form-control" id="email" name="email" placeholder="Email Id" oninput="mail('email')" required>
                          <label class="control-label" for="inputError"><span id="err_email" class="error_class"></span></label>
                        </div>
                      </div>
                    </div>



        
                    

                <div class="col-md-6">
                   <div class="form-group row">
                        <label for="mobile" class="col-sm-4 col-form-label">Mobile:</label>
                        <div class="col-sm-6">
                          <input type="mobile" class="form-control" id="mobile" name="mobile"   placeholder="Mobile No" minlength="10" maxlength="10" onkeypress="return fnAllowNumeric(event)" required>
                          <label class="control-label" for="inputError"><span id="err_mobile" class="error_class"></span></label>
                        </div>
                      </div>
                    </div>







                  <div class="col-md-6">
                   <div class="form-group row">
                        <label for="designation" class="col-sm-4 col-form-label">Designation:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="designation" name="designation" required>
                          <label class="control-label" for="inputError"><span id="err_designation" class="error_class"></span></label>
                        </div>
                      </div>
                    </div>



                  



                <div class="col-md-6">
                   <div class="form-group row">
                        <label for="date_of_joining" class="col-sm-4 col-form-label">Date&nbsp;Of&nbsp;Joining:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control datepicker_id" id="date_of_joining" name="date_of_joining"  placeholder="DOJ"  required>
                          <label class="control-label" for="inputError"><span id="err_date_of_joining" class="error_class"></span></label>
                        </div>
                      </div>
                    </div>

                      <div class="col-md-12">
                        <div class="form-group row">
                        <label for="is_active" class="col-sm-2 col-form-label">Is&nbsp;Active:</label>
                        <div class="col-sm-4">
                         <label><input id="is_active" name="is_active" type="checkbox" value="1" style="zoom:1.5;"></label>
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
     var formdata = new FormData($("#employee_form")[0]);
    $.ajax({  
           type: "POST",  
           url: "{{URL::to('employee-master-form')}}",
            //data : $('#project_m').serialize(),
            data : formdata,
           processData: false,
             contentType : false,
             success: function(msg){
                   var response = JSON.parse(msg);
                    if(response.status == "success"){
                      $("#success_response").html(response.messege);
                 //window.location = response.redirectUrl;
                  $("#employee_form").trigger('reset');
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