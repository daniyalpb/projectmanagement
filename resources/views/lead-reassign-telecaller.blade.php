@extends('include.master')
@section('content')
  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
         <h3 class="box-title">Lead ReAssign to Telecaller</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

        

 <div class="box-body">
 <!--  <center><h3 style="color: #0099FF;">Manage Leads</h3></center><hr> -->
          <div class="row">  <!-- for center -->
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
              <!-- a -->
            <form class="form-horizontal" name="employee_form" id="employee_form"  method="post">
              {{csrf_field()}}


              <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empcode" class="col-sm-4 col-form-label">From Date:</label>
                        <div class="col-sm-8">
                          <input type="Date" class="form-control" id="empcode" name="empcode" value="<?php echo date('Y-m-d');?>">
                        </div>
                      </div>
                    </div>

                  




                  <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empname" class="col-sm-4 col-form-label">To Date:</label>
                        <div class="col-sm-8">
                          <input type="Date" class="form-control" id="empname" name="empname" value="<?php echo date('Y-m-d');?>">
                        </div>
                      </div>
                    </div>





                  <div class="col-md-6">
                   <div class="form-group row">
                        <label for="companyname" class="col-sm-4 col-form-label">Status:</label>
                        <div class="col-sm-8">
                          <select type="text" class="form-control" id="companyname" name="companyname">
                            <option selected disabled="0">Select One</option>
                             @foreach($status as $status)
                       <option value="{{$status->Lead_Status_Id}}">{{$status->Lead_Status}}</option>
                       @endforeach
                          </select>
                      </div>
                      </div>
                    </div>



                      <div class="col-md-6">
                   <div class="form-group row">
                        <label for="dob" class="col-sm-4 col-form-label">Source:</label>
                        <div class="col-sm-8">
                        <select type="text" class="form-control" id="dob" name="dob">
                          <option selected disabled="0">Select One</option>
                           @foreach($source as $source)
                       <option value="{{$source->source_id}}">{{$source->source_name}}</option>
                       @endforeach
                        </select>
                        </div>
                      </div>
                    </div>







                    <div class="col-md-6">
                        <div class="form-group row">
                        <label for="City" class="col-sm-4 col-form-label">Select&nbsp;City:</label>
                        <div class="col-sm-8">
                          <select type="text" class="form-control" id="City" name="City">
                            <option selected disabled="0">Select One</option>
                             @foreach($users as $user)
                       <option value="{{$user->City_id}}">{{$user->City_Name}}</option>
                       @endforeach 
                          </select>
                       
                        </div>
                      </div>
                    </div>



                     <div class="col-md-6">
                       <div class="form-group row">
                        <label for="mobile" class="col-sm-4 col-form-label">Assign&nbsp;To:</label>
                         <div class="col-sm-8">
                          <select type="text" class="form-control" id="mobile" name="mobile">
                           <option selected disabled="0">Select One</option>
                             @foreach($assign as $assign)
                       <option value="{{$assign->Emp_Code}}">{{$assign->Emp_Name}}</option>
                       @endforeach 
                     </select>
                        </div>
                      </div>
                    </div>








                  <div class="col-md-6">
                   <div class="form-group row">
                        <label for="LeadType" class="col-sm-4 col-form-label">Share&nbsp;Lead:</label>
                        <div class="col-sm-8">
                          <select type="text" class="form-control" id="LeadType" name="LeadType">
                            <option disabled selected value="0">Select One</option>
                            <option value="HL">Yes</option>
                            <option value="WB">No</option>
                          </select>

                        </div>
                      </div>
                    </div>                 


                  <div class="col-md-6">
                   <div class="form-group row">
                        <label for="active" class="col-sm-4 col-form-label">Share(%):</label>
                        <div class="col-sm-2" id="active_no">
                        <input type="text" class="form-control" id="active" name="active">
                        </div>
                      </div>
                    </div>



                <center>
                   <div class="col-sm-12">
                    <button type="submit" id="sub" class="btn btn-primary">Submit</button>
                  </div>
                </center>



               <div class="col-md-6">
                   <div class="form-group row">
                      <label for="active" class="col-sm-4 col-form-label">Share(%):</label>
                         <div class="col-sm-4">
                          <select type="text" class="form-control" id="active" name="active">
                            <option value="CN">Name</option>
                            <option value="M">Mobile</option>
                            <option value="LD">Lead Id</option>
                          </select>
                        </div>
                      </div>
                    </div>


                  <div class="col-md-6">
                   <div class="form-group row">
                           <div class="col-sm-3" style="margin-left: -210px;" >
                          <input type="text" class="form-control" id="active" name="active" >
                        
                      </div>
                    </div>
                  </div>

                 <center>
                    <div class="col-sm-12">
                      <button type="Serch" id="sub" class="btn btn-primary">Serch</button>
                      <button type="show" id="sub" class="btn btn-primary">Show All</button>
                   </div>
               </center>







          </form>
        </div>
      </div>
    </div>
  </div>
</div>




<script type="text/javascript">
  $('#LeadType').on('change',function(){
  var LeadType=$('#LeadType').find(":selected").val();
  if ( LeadType == 'WB')
  {
  $("#active").hide();
  }
  else{
 $("#active").show();
  }
  });
</script>
       @endsection