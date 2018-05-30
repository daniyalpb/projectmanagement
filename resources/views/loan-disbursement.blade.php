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
          <center><h3 style="color: #0099FF;">Loan Disbursement</h3></center><hr>
          <div class="row">  <!-- for center -->
            <div class="Absolute-Center is-Responsive">
              <div id="logo-container"></div>
              <!-- a -->

            <form class="form-horizontal" name="employee_form" id="employee_form"  method="post">
                {{csrf_field()}}

                  <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empcode" class="col-sm-3 col-form-label" style="margin-left: 25%;">Year:</label>
                        <div class="col-sm-6">
                          <select  class="form-control" id="Time" name="Time">
                    <option value="-1">--Select Year--</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                  </select>
                    </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-3 col-form-label" style="margin-left: 6%;">Month:</label>
                    <div class="col-sm-6">
                      <select  class="form-control" id="Time" name="Time">
                    <option value="-1">--Select Month--</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                   </div>
                 </div>
                 </div>



                 <div class="col-md-6">
                  <div class="form-group row">
                    <label for="companyname" class="col-sm-3 col-form-label" style="margin-left: 25%;">Business&nbsp;Head:</label>
                    <div class="col-sm-6">
                      <select type="text" class="form-control" id="companyname" name="companyname" required>
                        <option value="-1">Select One</option>
                    <option value="RB40000459">Mahendra Thakare</option>
                    <option value="RB40000455">Sameer Naik</option>
                    </select>
                  </div>
                </div>
              </div>


              <div class="col-md-6">
                <div class="form-group row">
                  <label for="address" class="col-sm-3 col-form-label" style="margin-left: 6%;">Business&nbsp;Manager:</label>
                  <div class="col-sm-6">
                    <select type="text" class="form-control" id="address" name="address"   placeholder="Enter a Address"  required>
                      <option disabled selected  value="0">Select One</option>
                  </select>
                </div>
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label" style="margin-left: 25%;">Select&nbsp;Time:</label>
                <div class="col-sm-6">
                  <select type="text" class="form-control" id="email" name="email" required>
                    <option disabled selected  value="0">Select&nbsp;Time</option>
                    <option value="1">13:00</option>
                    <option value="2">16:00</option>
                  </select>
              </div>
            </div>
          </div>

          <center>
            <div class="col-md-12">
            <button type="submit" id="sub" class="btn btn-primary">Submit</button>
          </div>
         </center>
       </form>
      </div>
    </div>
  </div>
</div>
</div>

 @endsection
