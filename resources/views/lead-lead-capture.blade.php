@extends('include.master')
@section('content')
  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Lead Lead Capture</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>


        <div class="box-body">
          <!-- <center><h3 style="color: #0099FF;">Lead Capture</h3></center><hr> -->
          <div class="row">  <!-- for center -->
            <div class="Absolute-Center is-Responsive">
              <div id="logo-container"></div>
              <!-- a -->

            <form class="form-horizontal" name="lead_id" id="employee_form"  method="POST">
                {{csrf_field()}}


                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="name" class="col-sm-4 col-form-label">Name*:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" onkeypress="return AllowAlphabet(event)" required>
                   </div>
                 </div>
                 </div>


                 <div class="col-md-6">
                   <div class="form-group row">
                        <label for="Designation" class="col-sm-4 col-form-label">Designation:</label>
                        <div class="col-sm-6">
                            <input type="text" name="Designation" id="Designation" class="form-control" placeholder="Designation">
                    </div>
                  </div>
                </div>


             <div class="col-md-6">
                <div class="form-group row">
                  <label for="mobile" class="col-sm-4 col-form-label">Mobile.No.:</label>
                  <div class="col-sm-6">
                    <input type="Mobile" class="form-control" id="mobile" name="mobile" placeholder="Mobile" minlength="10" maxlength="10" onkeypress="return fnAllowNumeric(event)" required>   
                </div>
              </div>
            </div>


            <div class="col-md-6">
                  <div class="form-group row">
                    <label for="pan" class="col-sm-4 col-form-label">Pancard&nbsp;No:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="pan" name="pan" oninput="pannumber('pan')" minlength="10" maxlength="10" placeholder="PAN">
                      <div id="pannumber" style="display:none;color: red; font-size: 12px">Oops.Please Enter Valid Pan Number.!!</div>                        
                  </div> 
                </div>
              </div>


                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">Email&nbsp;Id*:</label>
                    <div class="col-sm-6">
                      <input type="email" class="form-control" id="email" name="email" oninput="mail('email')" placeholder="Email Id" required>
                      <div id="email_id" style="display:none;color:red;font-size: 12px">Please Enter Valid Email Id.</div>                        
                  </div>
                </div>
              </div>


            <div class="col-md-6">
              <div class="form-group row">
                <label for="address" class="col-sm-4 col-form-label">Address*:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>                                          
                </div>
            </div>
          </div>


           <div class="col-md-6">
                <div class="form-group row">
                  <label for="Vertical_Id" class="col-sm-4 col-form-label">Vertical&nbsp;Name*:</label>
                  <div class="col-sm-6">
                    <select type="text" class="form-control" id="Vertical_Id" name="Vertical_Id" required>
                    <option>select</option>   
                     @foreach($vertical as $vertical)
                       <option value="{{$vertical->Vertical_Id}}">{{$vertical->Vertical_Name}}</option>
                       @endforeach                    
                  </select>   
                </div>
              </div>
            </div>

          <div class="col-md-6">
                <div class="form-group row">
                  <label for="address1" class="col-sm-4 col-form-label">Line&nbsp;1:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="address1" name="address1" placeholder="Address1">   
                </div>
              </div>
            </div>

                  

            <div class="col-md-6">
                <div class="form-group row">
                <label for="monthlyincome" class="col-sm-4 col-form-label">Monthly&nbsp;Income:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="monthlyincome" name="monthlyincome"
                    placeholder="Monthly Income" minlength="3" maxlength="9" onkeypress="return fnAllowNumeric(event)">
                  </div>
              </div>
            </div>



            <div class="col-md-6">
                <div class="form-group row">
                  <label for="address2" class="col-sm-4 col-form-label">Line&nbsp;2:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="address2" name="address2" placeholder="Address2">   
                </div>
              </div>
            </div>


             

             <div class="col-md-6">
                <div class="form-group row">
                  <label for="dob" class="col-sm-4 col-form-label">Date&nbsp;Of&nbsp;Birth:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control datepicker_id" id="dob" name="dob" placeholder="Date Of Birth">                      
                 
                </div>
              </div>
            </div>


             <div class="col-md-6">
                <div class="form-group row">
                  <label for="stateid" class="col-sm-4 col-form-label">State*:</label>
                  <div class="col-sm-6">
                    <select type="text" class="form-control" id="stateid" name="stateid" required>
                    <option>select</option>
                     @foreach($state as $state)
                       <option value="{{$state->state_id}}">{{$state->state_name}}</option>
                       @endforeach                       
                  </select>   
                </div>
              </div>
            </div>

             <div class="col-md-6">
                <div class="form-group row">
                  <label for="cityid" class="col-sm-4 col-form-label">City*:</label>
                  <div class="col-sm-6">
                    <select type="text" class="form-control" id="cityid" name="cityid" required>
                    <option>select</option>
                    @foreach($city as $city)
                       <option value="{{$city->City_Id}}">{{$city->City_Name}}</option>
                       @endforeach                        
                  </select>   
                </div>
              </div>
            </div>

          <div class="col-md-6">
            <div class="form-group row">
              <label for="Lead_Status_id" class="col-sm-4 col-form-label">Status:</label>
                <div class="col-sm-6">
                  <select type="text" class="form-control" id="Lead_Status_id" name="Lead_Status_id">
                   <option>select</option>
                   @foreach($status as $status)
                       <option value="{{$status->Lead_Status_Id}}">{{$status->Lead_Status}}</option>
                       @endforeach
                     </select>

                </div>
              </div>
            </div>




            <div class="col-md-6">
                  <div class="form-group row">
                    <label for="Pincode" class="col-sm-4 col-form-label">Pincode:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="Pincode" minlength="6" maxlength="6" name="Pincode" placeholder="Pincode" onkeypress="return fnAllowNumeric(event)">                        
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label for="ndate" class="col-sm-4 col-form-label">Next&nbsp;Date:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control datepicker_id" id="ndate" name="ndate" placeholder="Next Date">   
                </div>
              </div>
            </div>


          <div class="col-md-6">
                <div class="form-group row">
                  <label for="campaignName" class="col-sm-4 col-form-label">Company&nbsp;Name:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="campaignName" name="campaignName" placeholder="Company Name">   
                </div>
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group row">
                  <label for="lead_type" class="col-sm-4 col-form-label">Lead&nbsp;Type*:</label>
                  <div class="col-sm-6">
                    <select type="text" class="form-control" id="lead_type" name="lead_type" required>
                    <option>select</option>]
                    <option value="0">Select</option>
                    <option value="Hot">Hot</option>
                    <option value="Warm">Warm</option>                       
                  </select>   
                </div>
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group row">
                  <label for="profession" class="col-sm-4 col-form-label">Profession*:</label>
                  <div class="col-sm-6">
                    <select type="text" class="form-control" id="profession" name="profession" required>
                    <option>select</option>
                     @foreach($profess as $profess)
                       <option value="{{$profess->Profession_id}}">{{$profess->Profession_Name}}</option>
                       @endforeach                        
                  </select>   
                </div>
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group row">
                  <label for="productid" class="col-sm-4 col-form-label">Product*:</label>
                  <div class="col-sm-6">
                    <select type="text" class="form-control" id="productid" name="productid" required>
                    <option>select</option> 
                     @foreach($product as $product)
                       <option value="{{$product->Product_Id}}">{{$product->Product_Name}}</option>
                       @endforeach                         
                  </select>   
                </div>
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group row">
                  <label for="emp_code" class="col-sm-4 col-form-label">Assign&nbsp;To*:</label>
                  <div class="col-sm-6">
                    <select type="text" class="form-control" id="emp_code" name="emp_code" required>
                    <option>select</option>
                    @foreach($assign as $assign)
                       <option value="{{$assign->Emp_Code}}">{{$assign->Emp_Name}}</option>
                       @endforeach                       
                  </select>   
                </div>
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group row">
                  <label for="loan_amt" class="col-sm-4 col-form-label">Loan&nbsp;Amount*:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="loan_amt" name="loan_amt" placeholder="Loan Amount" required>
                  </div>
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group row">
                  <label for="broker_id" class="col-sm-4 col-form-label">Broker&nbsp;Name:</label>
                  <div class="col-sm-6">
                    <select type="text" class="form-control" id="broker_id" name="broker_id">
                    <option>select</option>
                    @foreach($broker as $broker)
                       <option value="{{$broker->Broker_id}}">{{$broker->Broker_Name}}</option>
                       @endforeach                        
                  </select>   
                </div>
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group row">
                  <label for="source_id" class="col-sm-4 col-form-label">Source*:</label>
                  <div class="col-sm-6">
                    <select type="text" class="form-control" id="source_id" name="source_id" required>
                    <option>select</option>
                    @foreach($source as $source)
                       <option value="{{$source->source_id}}">{{$source->source_name}}</option>
                       @endforeach                       
                  </select>   
                </div>
              </div>
            </div>

           


             <div class="col-md-6">
                <div class="form-group row">
                  <label for="Remark" class="col-sm-4 col-form-label">Remark:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="Remark" name="Remark" placeholder="Remark">   
                </div>
              </div>
            </div>


             <div class="col-md-6">
              <div class="form-group row">
                <label for="Bank_Id" class="col-sm-4 col-form-label">Bank:</label>
                <div class="col-sm-6">
                  <select type="Bank_Id" class="form-control" id="Bank_Id" name="Bank_Id" required>
                    <option disabled selected  value="0">select</option> 
                     @foreach($bank as $bank)
                       <option value="{{$bank->Bank_Id}}">{{$bank->Bank_Name}}</option>
                       @endforeach                     
                  </select>
              </div>
            </div>
          </div>



             <div class="col-md-6">
                <div class="form-group row">
                  <label for="ExpctDisbsDate" class="col-sm-4 col-form-label">Exp.&nbsp;Disbursal&nbsp;Date:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control datepicker_id" id="ExpctDisbsDate" name="ExpctDisbsDate" placeholder="Disbursal Date">   
                </div>
              </div>
            </div>

               <div class="col-md-6">
                   <div class="form-group row">
                        <label for="demo_given" class="col-sm-4 col-form-label">Demo:</label>
                        <div class="col-sm-6">
                          Is Demo Given?
                        <input id="demo_given" name="demo_given" type="checkbox"  value="Yes">
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


<script type="text/javascript">
  function mail(obj,val){
    //console.log(obj);
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
  function pannumber(obj,val){
    // console.log(obj);
    if(obj=='pan' ){
                   var str =$('#pan').val();
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

 @endsection
