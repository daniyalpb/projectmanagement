@extends('include.master')
@section('content')
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
                        <label for="empcode" class="col-sm-4 col-form-label">Employee Code:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="empcode" name="empcode" placeholder="Employee Code"  required>
                        </div>
                      </div>
                    </div>



                       <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empname" class="col-sm-4 col-form-label">Employee Name:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="empname" name="empname"   placeholder="Employee Name"  required>
                        </div>
                      </div>
                    </div>




                      <div class="col-md-6">
                   <div class="form-group row">
                        <label for="companyname" class="col-sm-4 col-form-label">Company Name:</label>
                        <div class="col-sm-6">
                          <select type="text" class="form-control" id="companyname" name="companyname"   placeholder="Enter a Company Name"  required>
                          <option disabled selected  value="0">Select One</option>
                          @foreach ($shows as $show)
                          <option value="{{ $show->Company_Id}}">{{ $show->Company_Name}}</option>
                        @endforeach
                         </select>
                        </div>
                      </div>
                    </div>



                       <div class="col-md-6">
                   <div class="form-group row">
                        <label for="address" class="col-sm-4 col-form-label">Address:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="address" name="address"   placeholder="Address"  required>
                        </div>
                      </div>
                    </div>


                         <div class="col-md-6">
                        <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">Email Id:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="email" name="email"   placeholder="Email Id" oninput="mail('email')"  required>
                          <span id="email_id" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</span>
                        </div>
                      </div>
                    </div>



                    <div class="col-md-6">
                   <div class="form-group row">
                        <label for="dob" class="col-sm-4 col-form-label">Date Of&nbsp;Birth:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control datepicker_id" id="dob" name="dob"  placeholder="DOB"  required>
                        </div>
                      </div>
                    </div>


                <div class="col-md-6">
                   <div class="form-group row">
                        <label for="mobile" class="col-sm-4 col-form-label">Mobile:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="mobile" name="mobile"   placeholder="Mobile No" minlength="10" maxlength="10" onkeypress="return fnAllowNumeric(event)" required>
                        </div>
                      </div>
                    </div>



                       <div class="col-md-6">
                   <div class="form-group row">
                        <label for="department" class="col-sm-4 col-form-label">Department:</label>
                        <div class="col-sm-6">
                          <select type="text" class="form-control" id="department" name="department" required>
                          <option disabled selected  value="">Select One</option>
                       @foreach ($insert as $insert)
                       <option value="{{ $insert->Department_Id}}">{{ $insert->Department_Name}}</option>
                     @endforeach
                   </select>
                        </div>
                      </div>
                    </div>





                  <div class="col-md-6">
                   <div class="form-group row">
                        <label for="designation" class="col-sm-4 col-form-label">Designation:</label>
                        <div class="col-sm-6">
                          <select type="text" class="form-control" id="designation" name="designation" required>
                          <option disabled selected  value="">Select One</option>
                      @foreach ($selects as $select)
                       <option value="{{ $select->Designation_Id}}">{{ $select->Designation}}</option>
                     @endforeach
                   </select>
                        </div>
                      </div>
                    </div>



                       <div class="col-md-6">
                   <div class="form-group row">
                        <label for="reporting_authority" class="col-sm-4 col-form-label">Reporting&nbsp;Authority:</label>
                        <div class="col-sm-6">
                          <select type="text" class="form-control" id="reporting_authority" name="reporting_authority" required>
                            <option disabled selected value="">Select One</option>
                      @foreach($users as $user)
                       <option value="{{$user->EmpId}}">{{$user->Emp_Name}}</option>
                       @endforeach 
                       </select>
                        </div>
                      </div>
                    </div>




                <div class="col-md-6">
                   <div class="form-group row">
                        <label for="date_of_joining" class="col-sm-4 col-form-label">Date&nbsp;Of&nbsp;Joining:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control datepicker_id" id="date_of_joining" name="date_of_joining"  value="" placeholder="DOJ"  required>
                        </div>
                      </div>
                    </div>



                       <div class="col-md-6">
                   <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Band:</label>
                        <div class="col-sm-6">
                          <select  class="form-control" id="band" name="band"  required>
                      <option disabled selected  value="0">Select Band</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                     
                     </select>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                   <div class="form-group row">
                       <label for="inputPassword" class="col-sm-4 col-form-label">Variable:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="variable" name="variable"  value="" placeholder="Variable"  required>
                      </div>
                    </div>
                  </div>
                    

                    <div class="col-md-6">
                   <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">CTC:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="ctc" name="ctc"  value="" placeholder="CTC"  required>
                        </div>
                      </div>
                    </div>




                      <div class="col-md-12">
                        <div class="form-group row">
                        <label for="Is_Active" class="col-sm-2 col-form-label">Is&nbsp;Active:</label>
                        <div class="col-sm-4">
                         <label><input id="Is_Active" name="Is_Active" type="checkbox" value="Yes" style="zoom:1.5;"></label>
                        </div>
                      </div>
                    </div> 



                    <center><div class="col-sm-12">
                   <button type="submit" id="sub" class="btn btn-primary">Submit</button>
            <button type="reset" value="Reset">Reset</button>
          </div></center>
        </form>
      </div>
    </div>
  </div>
</div>
</div>



<script type="text/javascript">
  var username = $('#username').val();
$('#username').change(function() {
   $.ajax({
      url: "validation.php",
      type: 'POST',
      data: 'username=' + username,
      success: function(result){
                 if(result > 0){
                     // do something if username already exist
                 }
                 else{
                     // do something if username doesn't exist
                 }
               }
      });
});
</script>





  


<script type="text/javascript">
          function mail(obj,val){
         // console.log(obj);
         if(obj=='email' ){
                        var str =$('#email').val();
                        var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                        var res = str.match(emailPattern);
                        if(res){
                          // console.log('Pancard is valid one.!!');
                           $('#email_id').hide();
     
                       }else{
                         // console.log('Oops.Please Enter Valid Pan Number.!!');
                         $('#email_id').show();
     
                         return false;
                       }
                       
       }
     }
     </script>
     <script type="text/javascript">
  function fnAllowNumeric(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {

              return false;
            }
            return true;
          }
</script>

<script type="text/javascript">
  function AllowAlphabet(e)
{
  isIE = document.all ? 1 : 0
  keyEntry = !isIE ? e.which : event.keyCode;
  if (((keyEntry >= '65') && (keyEntry <= '90')) || ((keyEntry >= '97') && (keyEntry <= '122')) || (keyEntry == '46') || (keyEntry == '32') || keyEntry == '45')
     return true;
  else
{
    // alert('Please Enter Only Character values.');
    return false;
      }
}



  $(".datepicker_id").datepicker({ dateFormat: "yy-mm-dd",
          changeMonth: true,
          changeYear: true,
    
        });

</script>
                      
                      


       @endsection

