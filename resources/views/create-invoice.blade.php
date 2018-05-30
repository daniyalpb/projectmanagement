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
          <center><h3 style="color: #0099FF;">Invoice</h3></center><hr>
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






              <div class="col-md-6">
                <div class="form-group row">
                  <label for="LeadType" class="col-sm-4 col-form-label">Invoice&nbsp;/Credit Note:</label>
                  <div class="col-sm-6">
                    <select type="text" class="form-control" id="LeadType" name="LeadType"   placeholder="Enter a Address"  required>
                       <option disabled selected  value="0">Select One</option>
                    <option value="HL">Invoice</option>
                      <option value="WB">Credit Note</option>
                       </select>
                      
                </div>
              </div>
            </div>



                      <div class="col-md-6">
                        <div  id="last_nm">
                    <label for="credit_invoice" id="weburl" name="weburl"  class="col-sm-4 col-form-label">invoice:</label>
                  </div>
              




                
                  <div class="form-group row">
                    <div  id="first_nm">
                    <label for="companyname" id="webtitle" name="webtitle"  style="display: none"  class="col-sm-4 col-form-label">Credit&nbsp;Note Date:</label>
                    </div>
                    <div class="col-sm-6">
                      <input type="Date" class="form-control"  id="credit_invoice" name="credit_invoice" required>
                    </div>
                  </div>
              </div>


             <center>
               <div class="col-md-12">
                <button type="submit" id="sub" class="btn btn-primary">Create</button><br>
              </div>
            </center>











            <div class="col-md-6">
              <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Invoice&nbsp;No:</label>
                <div class="col-sm-6">
                  <div  id="active_no">
                  <input type="text" class="form-control" id="active" placeholder=" Enter a Invoice No" name="active">
                </div>
            
                




               
                <div  id="credite_no">
                  <input type="text" disabled="disabled" class="form-control" id="create" name="create" style="display: none">
                </div>
              </div>
                </div>
              </div>
            </div>
    
        




          <div class="col-md-6">
            <div class="form-group row">
              <label for="dob" class="col-sm-4 col-form-label">Credite&nbsp;Note&nbsp;No:</label>
              <div class="col-sm-6">
                <input type="text"  class="form-control" placeholder="Enter a Credite No" id="email" name="email" required>
            </div>
          </div>
        </div>


        <div class="col-md-6">
          <div class="form-group row">
            <label for="department" class="col-sm-4 col-form-label">Select&nbsp;/Debtor:</label>
            <div class="col-sm-6">
              <select type="text" class="form-control" id="department" name="department" required>
                  <option disabled selected  value="">Select One</option>
                   @foreach($selects as $select)
                       <option value="{{$select->Bank_Id}}">{{$select->Bank_Name}}</option>
                       @endforeach 
                </select>
               </div>
             </div>
           </div>


           <div class="col-md-6">
            <div class="form-group row">
              <label for="department" class="col-sm-4 col-form-label">Debtor&nbsp;Address:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Enter a Debtor Address" id="email" name="email" required>
              </div>
            </div>
          </div>





                <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empcode" class="col-sm-4 col-form-label">Debtor&nbsp;GST&nbsp;State:</label>
                        <div class="col-sm-6">
                          <select type="text" class="form-control" id="empcode" name="empcode" required>
                          <option disabled selected  value="0">Select One</option>
                           @foreach($users as $user)
                       <option value="{{$user->state_id}}">{{$user->state_name}}</option>
                       @endforeach 
                        </select>
                    </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-4 col-form-label">Debtor&nbsp;GST&nbsp;No:</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" id="email" placeholder="Enter a Debtor GST No" name="email" required>
                   </div>
                 </div>
                 </div>



                 <div class="col-md-6">
                  <div class="form-group row">
                    <label for="companyname" class="col-sm-4 col-form-label">Rupeeboss&nbsp;Bank Name:</label>
                    <div class="col-sm-6">
                     <select type="text" class="form-control" id="empcode" name="empcode" required>
                          <option disabled selected  value="0">Select One</option>
                        </select>
                  </div>
                </div>
              </div>


              <div class="col-md-6">
                <div class="form-group row">
                  <label for="address" class="col-sm-4 col-form-label">Rupeeboss&nbsp;Bank A/c.No:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="address" name="address"   placeholder="Enter a Rupeeboss A/c.No"  required>
                     
                </div>
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Rupeeboss&nbsp;IFSC Code:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="email" placeholder="Enter a Rupeeboss IFSC Code" name="email" required>
                    
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group row">
              <label for="dob" class="col-sm-4 col-form-label">Rupeeboss&nbsp;office Address:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="dob" name="dob"  placeholder="Enter a Rupeeboss office Address"  required>
                
              
            </div>
          </div>
        </div>


        <div class="col-md-6">
          <div class="form-group row">
            <label for="mobile" class="col-sm-4 col-form-label">Rupeeboss&nbsp;GST State:</label>
            <div class="col-sm-6">
              <select type="text" class="form-control" id="dob" name="dob"  placeholder="Enter a Rupeeboss GST State"  required>
                <option disabled selected value="">Select One</option>
                
              </select>
             </div>
           </div>
         </div>


           <div class="col-md-6">
            <div class="form-group row">
              <label for="department" class="col-sm-4 col-form-label">Rupeeboss&nbsp;GST. No:</label>
              <div class="col-sm-6">
                <select type="text" class="form-control" id="department" name="department"  required>
                  <option disabled selected  value="">Select One</option>
                </select>
              </div>
            </div>
          </div>



               <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empcode" class="col-sm-4 col-form-label">Supplier's&nbsp;Ref.No:</label>
                        <div class="col-sm-6">
                          <select type="text" class="form-control" id="empcode" name="empcode" required>
                          <option disabled selected  value="0">Select One</option>
                         
                      </select>
                    </div>
                  </div>
                </div>




                 <div class="col-md-12">
                  <center><h4>Select Client</h4></center><hr>
                </div>
                       




                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-4 col-form-label">Client&nbsp;Name:</label>
                    <div class="col-sm-6">
                    <select type="text" class="form-control" id="companyname" name="companyname" required>
                    <option disabled selected  value="0">Select One</option>
                     </select>
                   </div>
                 </div>
                 </div>



                 <div class="col-md-6">
                  <div class="form-group row">
                    <label for="companyname" class="col-sm-4 col-form-label">Lead&nbsp;Id:</label>
                    <div class="col-sm-6">
                      <select type="text" class="form-control" id="companyname" name="companyname" required>
                        <option disabled selected  value="0">Select One</option>
                      </select>
                  </div>
                </div>
              </div>


              <div class="col-md-6">
                <div class="form-group row">
                  <label for="address" class="col-sm-4 col-form-label">Bank:</label>
                  <div class="col-sm-6">
                    <select type="text" class="form-control" id="address" name="address"   placeholder="Enter a Address"  required>
                      <option disabled selected  value="0">Select One</option>
                      
                  </select>
                </div>
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Disbursed&nbsp;Amt</label>
                <div class="col-sm-6">
                  <select type="text" class="form-control" id="email" name="email" required>
                    <option disabled selected  value="0">Select One</option>
                   
                </select>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group row">
              <label for="dob" class="col-sm-4 col-form-label">Company Name:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="dob" name="dob"  placeholder="Enter a Company Name"  required>
            </div>
          </div>
        </div>


        <div class="col-md-6">
          <div class="form-group row">
            <label for="mobile" class="col-sm-4 col-form-label">Client&nbsp;Name&nbsp;as per&nbsp;Bank:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="mobile" name="mobile"   placeholder="Enter a Client Name" required>
               </div>
             </div>
           </div>


           <div class="col-md-6">
            <div class="form-group row">
              <label for="department" class="col-sm-4 col-form-label">Payout&nbsp;%:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="department" name="department" placeholder="Enter a Payout %" required>
              </div>
            </div>
          </div>



              <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empcode" class="col-sm-4 col-form-label">Loan&nbsp;Account No:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="empcode" name="empcode" placeholder="Enter a Loan Account No" required>
                    </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-4 col-form-label">Rupeeboss Revenue:</label>
                    <div class="col-sm-6">
                     <input type="text" class="form-control" id="empname" name="empname"   placeholder="Enter a Rupeeboss Revenue"  required>
                   </div>
                 </div>
                 </div>



                 <div class="col-md-6">
                  <div class="form-group row">
                    <label for="companyname" class="col-sm-4 col-form-label">Product:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="companyname" name="companyname" placeholder="Enter a Product" required>
                       
                  </div>
                </div>
              </div>


              <div class="col-md-6">
                <div class="form-group row">
                  <label for="address" class="col-sm-4 col-form-label">Total&nbsp;Rupeeboss&nbsp;Revenue:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="address" name="address"   placeholder="Enter a Total Rupeeboss Revenue"  required>
                      
                </div>
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">GST&nbsp;%:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="email" name="email" placeholder="Enter a GST %" required>
                   
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group row">
                <label for="dob" class="col-sm-4 col-form-label">SGST:</label>
                <div class="col-sm-6">
                 <input type="text" class="form-control" id="email" name="email" placeholder="Enter a SGST" required>
            </div>
          </div>
        </div>


        <div class="col-md-6">
          <div class="form-group row">
            <label for="mobile" class="col-sm-4 col-form-label">CGST::</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="mobile" name="mobile"   placeholder="Enter a Bank Name" placeholder="Enter a CGST" required>
               </div>
             </div>
           </div>


           <div class="col-md-6">
            <div class="form-group row">
              <label for="department" class="col-sm-4 col-form-label">IGST:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="department" name="department" placeholder="Enter a IGST" required>
                  
              </div>
            </div>
          </div>


          <div class="col-md-6">
            <div class="form-group row">
              <label for="department" class="col-sm-4 col-form-label">Narration:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="department" name="department" placeholder="Enter a Narration" required>
                  
              </div>
            </div>
          </div>



          <div class="col-md-6">
            <div class="form-group row">
              <label for="department" class="col-sm-4 col-form-label">Total&nbsp;Invoice Value:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="department" name="department" placeholder="Enter a Invoice Value" required>
                  
              </div>
            </div>
          </div>


          <center>
             <div class="col-md-12">
            <button type="submit" id="sub" class="btn btn-primary">Submit</button>
            <button type="reset" value="Reset">Reset</button>
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
  $("#webtitle").show();
  $("#first_nm").show();
  }
  else{
 $("#weburl").show();
 $("#last_nm").show();
  $("#webtitle").hide();
  $("#first_nm").hide();
  }
  });
</script>


<script type="text/javascript">
  $('#LeadType').on('change',function(){
  var LeadType=$('#LeadType').find(":selected").val();
  if ( LeadType == 'WB')
  {
  $("#active").hide();
  $("#active_no").hide();
  $("#create").show();
  $("#credite_no").show();
  }
  else{
 $("#active").show();
 $("#active_no").show();
  $("#create").hide();
  $("#credite_no").hide();
  }
  });
</script>




<style type="text/css">
  .form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
</style>



 @endsection
