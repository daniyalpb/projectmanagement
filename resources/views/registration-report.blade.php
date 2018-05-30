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
          <center><h3 style="color: #0099FF;">RBA Registration Report</h3></center><hr>
          <div class="row">  <!-- for center -->
            <div class="Absolute-Center is-Responsive">
              <div id="logo-container"></div>
              <!-- a -->

            <form class="form-horizontal" name="employee_form" id="employee_form"  method="post">
                {{csrf_field()}}


                <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empcode" class="col-sm-2 col-form-label" style="margin-left: 30%;">Select&nbsp;Period:</label>
                       <div class="col-md-6">
                  <select type="text" class="form-control" id="LeadType" name="LeadType">
                    <option disabled selected  value="0">Select One</option>
                      <option value="HL">Daywise</option>
                        <option value="WB">Specific Period</option>
                    </select>
                </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-2 col-form-label" >Company</label>
                    <div class="col-sm-6">
                  <select type="text" class="form-control"   id="companyname" name="companyname">
                    @foreach($users as $user)
                    <option value="{{$user->Company_Id}}">{{$user->Company_Name}}</option>
                  @endforeach
                </select>
                   </div>
                 </div>
                 </div>



                 <div class="col-md-6">
                <div class="form-group row">
                  <div  id="last_nm">
                  <label for="credit_invoice" id="weburl" name="weburl" class="col-sm-2 col-form-label" style="margin-left: 30%;">Form&nbsp;Date:</label>
                  <div class="col-sm-6">
                    <input type="date" class="form-control" value="<?php echo date('Y-m-d');?>" id="credit_invoice" name="credit_invoice">
                  </div>
                  </div>

                  <div class="col-sm-6">
                    <input type="date"  style="margin-left: 103%;display: none;" class="form-control" value="<?php echo date('Y-m-d');?>" id="edit_invoice" name="edit_invoice">
                  </div>
                  
              </div>
            </div>

             <div id="first_nm">
              <label  for="credit_invoice" id="webtitle" style="display: none;margin-left: -43%;" name="webtitle"  class="col-lg-2 col-sm-12 control-label">Select&nbsp;Date:</label>
            </div>



              <div id="middle_nm">
                <div class="col-md-6">
                <div class="form-group row">
                  <label for="LeadType" class="col-sm-2 col-form-label">To&nbsp;Date:</label>
                  <div class="col-sm-6">
                    <input type="Date"  class="form-control" value="<?php echo date('Y-m-d');?>" id="to_date" name="to_date">
                  </div>
              </div>
            </div>
          </div>



              <div style="display: none" id="time">
                <div class="col-md-6">
                <div class="form-group row">
                  <label for="LeadType" class="col-sm-2 col-form-label" style="margin-left: 0%;">Start&nbsp;Time:</label>
                  <div class="col-sm-6">
                    <select type="text" class="form-control" id="start_time1" name="start_time1">
                  <option selected="selected" value="-1">Select One</option>
                    <option value="8:00">8:00</option>
                    <option value="9:00">9:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                    <option value="18:00">18:00</option>
                    <option value="19:00">19:00</option>
                    <option value="20:00">20:00</option>
                    <option value="21:00">21:00</option>
                    <option value="22:00">22:00</option>
                    <option value="23:00">23:00</option>
                </select>
                      
                </div>
              </div>
            </div>
       





            <!--   <div style="display: none" id="time"> -->
                <div class="col-md-6">
                <div class="form-group row">
                  <label for="LeadType" class="col-sm-2 col-form-label" style="margin-left: 30%;">End&nbsp;Time:</label>
                  <div class="col-sm-6">
                    <select type="text" class="form-control" id="end_time2" name="end_time2">
                  <option selected="selected" value="-1">Select One</option>
                    <option value="8:00">8:00</option>
                    <option value="9:00">9:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                    <option value="18:00">18:00</option>
                    <option value="19:00">19:00</option>
                    <option value="20:00">20:00</option>
                    <option value="21:00">21:00</option>
                    <option value="22:00">22:00</option>
                    <option value="23:00">23:00</option>
                </select>
                      
                </div>
              </div>
            </div>
          </div>
              
          <center>
            <div class="col-md-12">
              <button type="submit" id="sub" class="btn btn-primary">Generate Report</button>
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
  $("#weburl").hide();
  $("#last_nm").hide();
  $("#last_nm").hide();
  $("#webtitle").show();
  $("#first_nm").show();
//$("#edit_invoice").hide();
  $("#middle_nm").hide();
  $("#to_date").hide();

  $("#edit_invoice").hide();

  
  }
  else{
 $("#weburl").show();
 $("#last_nm").show();
  $("#webtitle").hide();
  $("#first_nm").hide();
  $("#edit_invoice").show();
  $("#middle_nm").show();
  $("#to_date").show();
  }
  //$("#edit_invoice").show();

  });
</script>



<script type="text/javascript">
  $('#LeadType').on('change',function(){
  var LeadType=$('#LeadType').find(":selected").val();
  if ( LeadType == 'WB')
  {
 

  $("#time").show();
  $("#start_time").show();

  $("#edit_invoice").show();
  // $("#middle_nm").hide();
  // $("#to_date").hide();
  
  }
  else{

  $("#time").hide();
  $("#start_time").hide();

  $("#edit_invoice").hide();
  // $("#middle_nm").hide();
  // $("#to_date").hide();
  }
  });
</script>






@endsection