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
         <h3 class="box-title">All Issues</h3>
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
            <form class="form-horizontal" name="employee_master_form" id="employee_master_form"  method="post">
              {{csrf_field()}}

              <input type="hidden" name="u_EmpId" id="u_EmpId" value="{{ $user[0] ->id }}" >
          

                  <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empcode" class="col-sm-4 col-form-label">Project Name</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="Project Name" name="Project Name" placeholder="Project Name" readonly value="{{ $user[0] -> Project_Name }}">
                          <label class="control-label" for="inputError"><span id="err_empcode" class="error_class"></span></label>
                        </div>
                      </div>
                  </div>



                  <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empname" class="col-sm-4 col-form-label">Team</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="Team" name="Team" placeholder="Team" value="{{ $user[0] -> Team }}">
                          <label class="control-label" for="inputError"><span id="err_empname" class="error_class"></span></label>
                        </div>
                      </div>
                    </div>





                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="address" class="col-sm-4 col-form-label">Reporter:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="ReporterReporter" name="Reporter" placeholder="Address" value="{{ $user[0] -> Reporter }}">
                          <label class="control-label" for="inputError"><span id="err_address" class="error_class"></span></label>
                        </div>
                      </div>
                    </div>


                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="Assignee" class="col-sm-4 col-form-label">Assignee:</label>
                         <div class="col-sm-6">
                          <input type="text" class="form-control" id="Assignee" name="Assignee" placeholder="Assignee"  value="{{ $user[0] -> Assignee }}">
                          <label class="control-label" for="inputError"><span id="err_email" class="error_class"></span></label>
                        </div>
                      </div>
                    </div>



        
                    

                <div class="col-md-6">
                   <div class="form-group row">
                        <label for="mobile" class="col-sm-4 col-form-label">Issues:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="Issues" name="Issues"   placeholder="Mobile No" minlength="10" maxlength="10" value="{{ $user[0] -> Issues }}">
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
        $(".success_class").empty();
          $.ajax({  
           type: "POST",  
           url: "{{URL::to('openissues')}}",
           data : $('#employee_master_form').serialize(),
           success: function(msg){
            var response = JSON.parse(msg);
                    if(response.status == "success"){
                      $("#success_response").html(response.messege);
                      window.location = "http://localhost:8000/employee-table";
                    }
                  }
                });
        });
  </script>
@endsection