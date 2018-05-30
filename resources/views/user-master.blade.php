@extends('include.master')
@section('content')
  <div class="content">
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <center><h3 style="color: #0099FF;">User Master</h3></center>
        </div><br><br>
<!-- **Header section end -->





      <form class="form-horizontal" name="employee_form" id="employee_form"  method="post">
              {{csrf_field()}}

                  <div class="row">
                    <div class="col-sm-2">
                </div>
                 <div class="col-sm-2">
                    <label for="empcoad" class="col-lg-4 col-sm-12 control-label">User&nbsp;Name:</label>
                </div>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="empcode" name="empcode"  maxlength="10" style="margin-left: -15%;" >
                </div>
                
              <div class="col-sm-2">
              <label for="empname" class="col-lg-4 col-sm-12 control-label">Email:</label>
            </div>
            <div class="col-sm-2">
            <input type="text" class="form-control" id="email" name="email" oninput="mail('email')"  style="margin-left: -15%;" >
            <span id="email_id" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</span>
          </div><br>
            <div class="col-sm-1">
            </div><br><br>

            <div class="col-sm-2">
                </div>
                <div class="col-sm-2">
             <label for="companyname" class="col-lg-4 col-sm-12 control-label">Company&nbsp;Name:</label>
           </div>
             <div class="col-sm-2">
              <select  class="form-control" id="companyname" name="companyname" style="margin-left: -15%;"">
                      <option disabled selected  value="0">Select One</option>
                        @foreach ($selects as $select)
                       <option value="{{ $select->Company_Id}}">{{ $select->Company_Name}}</option>
                     @endforeach
                      </select>
                       </div>
                        
                      <div class="col-sm-2">
                  <label for="empname" class="col-lg-4 col-sm-12 control-label">Employee&nbsp;Code:</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="address" onkeypress="return fnAllowNumeric(event)" name="address"  maxlength="100" style="margin-left: -15%;" >
          </div>
          <div class="col-sm-1">
          </div><br><br>
          

           <div class="col-sm-2">
                </div>
                <div class="col-sm-2">
            <label for="inputEmail" class="col-lg-4 col-sm-12 control-label">Group&nbsp;Name:</label>
          </div>

          <div class="col-sm-2">
             <select  class="form-control" id="companyname" name="companyname" style="margin-left: -15%;"">
               <option disabled selected  value="">Select One</option>
               @foreach ($shows as $show)
          <option value="{{ $show->Groupid}}">{{ $show->GroupName}}</option>
        @endforeach
             </select>
                  </div>
                 

        <div class="col-sm-2">
            <label for="text" class="col-lg-4 col-sm-12 control-label">Mobile:</label>
          </div>
          <div class="col-sm-2">
            <input id="text" name="mob" type="mob" minlength="10" maxlength="10" onkeypress="return fnAllowNumeric(event)"  class="form-control" style="margin-left: -15%;">
          </div>
          <div class="col-sm-1">
          </div><br><br><br><br>
          <center><div class="col-sm-12">
                   <button type="submit" id="sub" class="btn btn-primary">Submit</button>
            <button type="reset" value="Reset">Reset</button>
          </div></center>
        </div>
      </form>
    </div>
  </div>

          @endsection




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
