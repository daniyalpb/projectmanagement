@extends('include.master')
@section('content')
  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

        <div class="box-body">
          <center><h3 style="color: #0099FF;">Associate Master</h3></center><hr>
          <div class="row">  <!-- for center -->
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-6 col-sm-offset-2">
           <form class="form-horizontal" name="break_master" id="break_master"  method="post">
           {{csrf_field()}}


                   <div class="form-group row">
                        <label for="Break_Type" class="col-sm-3 col-form-label">Associate&nbsp;Name:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="Break_Type" name="Break_Type"  value="" placeholder="Enter a Break Type"  required>
                        </div>
                      </div>



                      <div class="form-group row">
                        <label for="Time" class="col-sm-3 col-form-label">Contact&nbsp;No:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="Break_Type" name="Break_Type"  maxlength="10" minlength="10" placeholder="Entar a Contact No" onkeypress="return fnAllowNumeric(event)" required>
                    
                        </div>
                      </div>



                       <div class="form-group row">
                        <label for="Break_Type" class="col-sm-3 col-form-label">PAN&nbsp;No:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="PanNo" name="PanNo"   oninput="pancard('PanNo')" maxlength="10" minlength="10" placeholder=" Enter a Pancard*" required>
                         <div id="pannumber" style="display:none;color: red; font-size: 12px">Oops.Please Enter Valid Pan Number.!!</div>
                        </div>
                      </div>



                       <div class="form-group row">
                        <label for="Break_Type" class="col-sm-3 col-form-label">Email&nbsp;Id:</label>
                        <div class="col-sm-9">
                           <input type="text" class="form-control" id="work_email" name="work_email" placeholder="Enter a Email*" oninput="mail('work_email')" required>
                         <div id="email" style="display:none;color:red;font-size: 12px">Please Enter Valid Email Id.</div>
                        </div>
                      </div>




                       <div class="form-group row">
                        <label for="Break_Type" class="col-sm-3 col-form-label">Assign&nbsp;Employee:</label>
                        <div class="col-sm-9">
                           <select  class="form-control" id="Time" name="Time">
                    <option value="-1">Select One</option>
                    <option selected="selected" value="RB40000459">Mahendra Thakare</option>
                    <option value="RB40000596">Nagnath Khandekar</option>
                    <option value="RB40000455">Sameer Naik</option>
                  </select>
                        </div>
                      </div>




                       <div class="form-group row">
                        <label for="Break_Type" class="col-sm-3 col-form-label">Select&nbsp;City:</label>
                        <div class="col-sm-9">
                          <select  class="form-control" id="Time" name="Time">
                    <option disabled selected  value="0">Select&nbsp;City</option>
                     @foreach($lead as $lead)
                       <option value="{{$lead->City_Id}}">{{$lead->City_Name}}</option>
                       @endforeach 
                    
                  </select>
                        </div>
                      </div>



                       <div class="form-group row">
                        <label for="Break_Type" class="col-sm-3 col-form-label">Parent&nbsp;Associate&nbsp;Name:</label>
                        <div class="col-sm-9">
                         <select  class="form-control" id="Time" name="Time">
                    <option disabled selected  value="0">Select&nbsp;Time</option>
                    
                  </select>
                        </div>
                      </div>



                       <div class="form-group row">
                        <label for="Break_Type" class="col-sm-3 col-form-label">Remark:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="Break_Type" name="Break_Type"  value="" placeholder="Enter Remark"  required>
                        </div>
                      </div>




                       <div class="form-group row">
                        <label for="city_name" class="col-sm-3 col-form-label">Is&nbsp;Active:</label>
                        <div class="col-sm-9">
                         <label><input type="checkbox"  id="is_active" name="is_active" value="1" style="zoom:1.5;"></label>
                        </div>
                      </div>






                      <center> 
                        <input type="submit" name="Button1" value="Submit" id="Button1" class="btn btn-primary">
                        <input type="submit" name="Button2" value="Reset" id="Button2" class="btn btn-primary">
                      </center>

                      
        
        </form>
      </div>
    </div>
  </div>
</div>

    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

         <div class="box-body">

          <div class="container">
<div class="table-responsive">
  
  
  <table id="example" class="table table-striped table-bordered" role="grid" aria-describedby="otp-details-id_info" style=" border: 1px black font-size: normal;">
    <thead>
         <tr style="background-color: #87CEFA;border: 1px ridge black;">
                <th style="border:1px ridge black;">Sr No</th>
                <th style="border:1px ridge black;">Product Id</th>
                <th style="border:1px ridge black;">Product Name</th>
                <th style="border:1px ridge black;">Payout %</th>
                 <th style="border:1px ridge black;"><input type="checkbox"  id="checkAll" name="check" style="width: auto; float: left; display: inline-block; margin-right: 16px;"></th>
            </tr>


          </thead>
            <tbody>
             @foreach($smsdata as $val)
              <tr>
                <td style="border:1px ridge black;">{{ $no++ }}</td>
                <td style="border:1px ridge black;">{{$val->Product_Id}}</td>
                <td style="border:1px ridge black;">{{$val->Product_Name}}</td>
                <td style="border:1px ridge black;"> <input type="text" name=""></td>
                <td style="border:1px ridge black;"><input name="check" id="checkAll" type="checkbox" value="yes"></td>
            </tr>

         @endforeach
      </tbody>
    </table>
  </div>
</div>
</form>
</div>
</div>




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
  function mail(obj,val){
    //console.log(obj);
    if(obj=='work_email' ){
                   var str =$('#work_email').val();
                   var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#email').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#email').show();

                    return false;
                  }
                  
  }
}
</script>


<script type="text/javascript">
  function pancard(obj,val){
    // console.log(obj);
    if(obj=='PanNo' ){
                   var str =$('#PanNo').val();
                   var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                   var res = str.match(pancardPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#pannumber').hide();
                      // $('.credit-submit').show();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#pannumber').show();
                    // $('.credit-submit').hide();

                    return false;
                  }
                  
  }
}


</script>







    <script type="text/javascript">
      $(document).ready(function(){
        $("#checkAll").click(function () {
          $("INPUT[id^='checkAll']").not(this).prop('checked', this.checked);
          // $('input:checkbox').not(this).prop('checked', this.checked);
          // len=$(".check_list:checkbox:checked").length;
          // $('#msg_check').text(len+"/");
        });
      });
    </script>










<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
     

    @endsection