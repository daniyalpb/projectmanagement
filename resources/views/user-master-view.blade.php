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
         <h3 class="box-title">Task History View</h3>
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
            <form class="form-horizontal" name="task_master_form" id="task_master_form"  method="post">
              {{csrf_field()}}

              <input type="hidden" name="u_EmpId" id="u_EmpId" value="{{ $user[0]->id }}" >
          

                  <div class="col-md-6">
                   <div class="form-group row">
                        <label for="projectname" class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $user[0] -> name }}">
                          <label class="control-label" for="inputError"><span id="err_empcode" class="error_class"></span></label>
                        </div>
                      </div>
                  </div>



                  <div class="col-md-6">
                   <div class="form-group row">
                        <label for="Status" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ $user[0] -> email }}">
                          <label class="control-label" for="inputError"><span id="err_status" class="error_class"></span></label>
                        </div>
                      </div>
                    </div>



                  <div class="col-md-6">
                   <div class="form-group row">
                        <label for="Mobile" class="col-sm-4 col-form-label">Mobile</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="mobile" name="mobile" placeholder="mobile" value="{{ $user[0] -> mobile }}">
                          <label class="control-label" for="inputError"><span id="err_status" class="error_class"></span></label>
                        </div>
                      </div>
                    </div>





     <div class="col-md-6">
                   <div class="form-group row">
                        <label for="CreatedDate" class="col-sm-4 col-form-label">Created Date</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="Created_Date" name="Created_Date" placeholder="Created Date" value="{{ $user[0] -> Created_Date }}">
                          <label class="control-label" for="inputError"><span id="err_status" class="error_class"></span></label>
                        </div>
                      </div>
                    </div>





            <div class="col-md-6">
            <div class="form-group row">
            <label for="LoginDate" class="col-sm-4 col-form-label">Login Date</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="last_login_date" name="last_login_date" placeholder="last_login_date" value="{{ $user[0] ->last_login_date }}">
              <label class="control-label" for="inputError"><span id="err_status" class="error_class"></span></label>
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
        $(".success_class").empty();
          $.ajax({  
           type: "POST",  
           url: "{{URL::to('user-master-update')}}",
           data : $('#task_master_form').serialize(),
           success: function(msg){
         
            alert('Data Updated Successfully ');
             window.location="http://localhost:8000/user-master";
       
            
            //alert(msg.message);
            // var response = JSON.parse(msg);
            //   if(response.status == "success"){
            //  $("#success_response").html(response.messege);

 // window.location = "http://localhost:8000/task-history";
            //         }
                  }
                });
        });
  </script>
@endsection