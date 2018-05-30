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
          <center><h3 style="color: #0099FF;">Broker Invoice</h3></center><hr>
          <div class="row">  <!-- for center -->
            <div class="Absolute-Center is-Responsive">
              <div id="logo-container"></div>
              <!-- a -->

            <form class="form-horizontal" name="employee_form" id="employee_form"  method="post">
                {{csrf_field()}}


                <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empcode" class="col-sm-4 col-form-label">From&nbsp;Date:</label>
                        <div class="col-sm-6">
                          <input type="Date" class="form-control" id="empcode" name="empcode" required>
                        </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-4 col-form-label">To&nbsp;Date:</label>
                    <div class="col-sm-6">
                     <input type="Date" class="form-control" id="empname" name="empname"   placeholder="Enter a Menu Name"  required>
                   </div>
                 </div>
                 </div>



                 <center>
                  <div class="col-md-12">
                  <button type="submit" id="sub" class="btn btn-primary">Create</button>
                </div>
              </center>




              <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empcode" class="col-sm-4 col-form-label">Invoice&nbsp;No:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" readonly="readonly" id="empcode" name="empcode" required>
                          
                    </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-4 col-form-label">Invoice&nbsp;Date:</label>
                    <div class="col-sm-6">
                     <input type="text" class="form-control" id="empname"  name="empname"   placeholder="Enter a Client Name"  required>
                   </div>
                 </div>
                 </div>




                 <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empcode" class="col-sm-4 col-form-label">Client&nbsp;Name:</label>
                        <div class="col-sm-6">
                          <select type="text" class="form-control" id="empcode" name="empcode" required>
                           <option disabled selected  value="0">Select One</option>
                        </select>
                          
                    </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-4 col-form-label">Lone&nbsp;Ac.No:</label>
                    <div class="col-sm-6">
                     <input type="text" class="form-control" id="empname" name="empname"   placeholder="Enter a Lone Ac.No" readonly="readonly"  required>
                   </div>
                 </div>
                 </div>




                 <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empcode" class="col-sm-4 col-form-label">Bank:</label>
                        <div class="col-sm-6">
                          <select type="text" class="form-control" id="empcode" name="empcode" required>
                          <option disabled selected  value="0">Select One</option>
                        </select>
                          
                    </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-4 col-form-label">Address:</label>
                    <div class="col-sm-6">
                     <input type="text" class="form-control" id="empname" name="empname"   placeholder="Enter a Address"  required>
                   </div>
                 </div>
                 </div>



                 <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empcode" class="col-sm-4 col-form-label">Month:</label>
                        <div class="col-sm-6">
                          <select type="text" class="form-control" id="empcode" name="empcode" required>
                          <option disabled selected  value="0">Select One</option>
                        </select>
                    </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-4 col-form-label">Year:</label>
                    <div class="col-sm-6">
                     <input type="text" class="form-control" id="empname" name="empname"   placeholder="Enter a Year" readonly="readonly" required>
                   </div>
                 </div>
                 </div>



                 <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empcode" class="col-sm-4 col-form-label">Business&nbsp;Head:</label>
                        <div class="col-sm-6">
                          <select type="text" class="form-control" id="empcode" name="empcode" required>
                          <option disabled selected  value="0">Select One</option>
                        </select>
                    </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-4 col-form-label">Payout&nbsp;%</label>
                    <div class="col-sm-6">
                     <input type="text" class="form-control" id="empname" name="empname"   placeholder="Enter a Payout %" readonly="readonly" required>
                   </div>
                 </div>
                 </div>




                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-4 col-form-label">Service&nbsp;Tax Applicable:</label>
                    <div class="col-sm-6">
                     <label for="one">Yes</label>
                  <input type="radio" id="one" name="first_item" value="1" />
                  <label for="two">No</label>
                  <input type="radio" id="two" name="first_item" value="2" /> 
                   </div>
                 </div>
                 </div>



                 <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empcode" class="col-sm-4 col-form-label">Disbursed&nbsp;Amt:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="empcode" name="empcode" required>
                         
                    </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-4 col-form-label">Payout&nbsp;Amt</label>
                    <div class="col-sm-6">
                     <input type="text" class="form-control" id="empname" name="empname"   placeholder="Enter a Payout Amt" required>
                   </div>
                 </div>
                 </div>




               </form>
             </div>
           </div>
         </div>
       </div>
     </div>

@endsection