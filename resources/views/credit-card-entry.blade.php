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
  <center><h3 style="color: #0099FF;">Credit Card Entry</h3></center><hr>
          <div class="row">  <!-- for center -->
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
              <!-- a -->
            <form class="form-horizontal" name="employee_form" id="employee_form"  method="post">
              {{csrf_field()}}
          

                 <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empcode" class="col-sm-4 col-form-label">Select Date:</label>
                        <div class="col-sm-8">
                          <input type="Date" class="form-control" id="empcode" name="empcode">
                        </div>
                      </div>
                    </div>



                  <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empname" class="col-sm-4 col-form-label">Name:</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="empname" name="empname"   placeholder="Enter a  Name"  required>
                        </div>
                      </div>
                    </div>



                    <div class="col-md-6">
                        <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">Email Id:</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="email" name="email"   placeholder="Enter a Email Id" oninput="mail('email')"  required>
                          <span id="email_id" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</span>
                        </div>
                      </div>
                    </div>



                  <div class="col-md-6">
                   <div class="form-group row">
                        <label for="mobile" class="col-sm-4 col-form-label">Mobile:</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="mobile" name="mobile"   placeholder="Enter a Bank Name" minlength="10" maxlength="10" onkeypress="return fnAllowNumeric(event)" required>
                        </div>
                      </div>
                    </div>





                  <div class="col-md-6">
                   <div class="form-group row">
                        <label for="companyname" class="col-sm-4 col-form-label">Select City:</label>
                        <div class="col-sm-8">
                          <select type="text" class="form-control" id="companyname" name="companyname">
                          <option disabled selected  value="0">Select One</option>
                           @foreach($city as $city)
                       <option value="{{$city->City_Id}}">{{$city->City_Name}}</option>
                       @endforeach 
                        </select>
                        </div>
                      </div>
                    </div>



                  <div class="col-md-6">
                   <div class="form-group row">
                        <label for="companyname" class="col-sm-4 col-form-label">Select Bank:</label>
                        <div class="col-sm-8">
                          <select type="text" class="form-control" id="companyname" name="companyname">
                          <option disabled selected  value="0">Select One</option>
                           @foreach($bank as $bank)
                       <option value="{{$bank->Bank_Id}}">{{$bank->Bank_Name}}</option>
                       @endforeach
                        </select>
                        </div>
                      </div>
                    </div>




                  <div class="col-md-6">
                   <div class="form-group row">
                        <label for="address" class="col-sm-4 col-form-label">Select Product:</label>
                        <div class="col-sm-8">
                          <select type="text" class="form-control" id="address" name="address" placeholder="Enter a Product"> 
                          <option disabled selected  value="0">Select One</option> 
                            @foreach($product as $product)
                       <option value="{{$product->Product_Id}}">{{$product->Product_Name}}</option>
                       @endforeach 
                     </select>
                        </div>
                      </div>
                    </div>


                         


                  <div class="col-md-6">
                   <div class="form-group row">
                        <label for="dob" class="col-sm-4 col-form-label">Company&nbsp;Name:</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="dob" name="dob"  placeholder="Enter a Company Name">
                        </div>
                      </div>
                    </div>


                



                  <div class="col-md-6">
                   <div class="form-group row">
                        <label for="department" class="col-sm-4 col-form-label">Select&nbsp;Profession:</label>
                        <div class="col-sm-8">
                          <select type="text" class="form-control" id="department" name="department">
                          <option disabled selected  value="">Select One</option>    
                          @foreach($profession as $profession)
                       <option value="{{$profession->Profession_id}}">{{$profession->Profession_Name}}</option>
                       @endforeach               
                         </select>
                        </div>
                      </div>
                    </div>





                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-4 col-form-label">Select&nbsp;TieUp:</label>
                    <div class="col-sm-6">
                     <label for="one">Broker</label>
                  <input type="radio" id="one" name="first_item" value="1" />
                  <label for="two">Customer </label>
                  <input type="radio" id="two" name="first_item" value="2" /> 
                   </div>
                 </div>
                 </div>





                  <!-- <div class="col-md-6">
                   <div class="form-group row">
                        <label for="designation" class="col-sm-4 col-form-label">Designation:</label>
                        <div class="col-sm-8">
                          <select type="text" class="form-control" id="designation" name="designation" required>
                                         
                          </select>
                        </div>
                      </div>
                    </div>
 -->


                  <div class="col-md-6">
                   <div class="form-group row">
                        <label for="reporting_authority" class="col-sm-4 col-form-label">Enter&nbsp;Amount:</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="reporting_authority" name="reporting_authority" placeholder="Enter a Amount">
                        </div>
                      </div>
                    </div>




                <div class="col-md-6">
                   <div class="form-group row">
                        <label for="date_of_joining" class="col-sm-4 col-form-label">Remark:</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="date_of_joining" name="date_of_joining"  value="" placeholder="Enter a Remark"  required>
                         </div>
                       </div>
                      </div>



            <center>
               <div class="col-sm-12">
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
