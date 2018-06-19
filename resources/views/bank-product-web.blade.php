@extends('include.master')
@section('content')
  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
        <center><h3 class="box-title">Bank Product Web</h3></center> 
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>


        <div class="box-body">
         <!--  <center><h3 style="color: #0099FF;">Bank Product Web</h3></center><hr> -->
          <div class="row">  <!-- for center -->
            <div class="Absolute-Center is-Responsive">
              <div id="logo-container"></div>
              <!-- a -->

            <form class="form-horizontal" name="employee_form" id="employee_form"  method="post">
                {{csrf_field()}}


                <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empcode" class="col-sm-4 col-form-label">Select&nbsp;bank:</label>
                        <div class="col-sm-6">
                          <select type="text" class="form-control" id="empcode" name="empcode">
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
                    <label for="empname" class="col-sm-4 col-form-label">Min&nbsp;Credit&nbsp;Score:</label>
                    <div class="col-sm-6">
                     <input type="text" class="form-control" id="empname" name="empname"   placeholder="Enter a Menu Name"  required>
                   </div>
                 </div>
                 </div>






              <div class="col-md-6">
                <div class="form-group row">
                  <label for="LeadType" class="col-sm-4 col-form-label">Product:</label>
                  <div class="col-sm-6">
                    <select type="text" class="form-control" id="LeadType" name="LeadType"   placeholder="Enter a Address"  required>
                       <option disabled selected  value="0">Select One</option>
                    @foreach($select as $select)
                       <option value="{{$select->Product_Id}}">{{$select->Product_Name}}</option>
                       @endforeach 
                       </select>
                      
                </div>
              </div>
            </div>



          <div class="col-md-6">
            <div class="form-group row">
              <label for="dob" class="col-sm-4 col-form-label">Message:</label>
              <div class="col-sm-6">
                <input type="text"  class="form-control" placeholder="Enter a Message" id="email" name="email">
            </div>
          </div>
        </div>


     

           <div class="col-md-6">
            <div class="form-group row">
              <label for="department" class="col-sm-4 col-form-label">Min&nbsp;Age:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Enter a Age" id="email" name="email">
              </div>
            </div>
          </div>





                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-4 col-form-label">Guarantor&nbsp;required:</label>
                    <div class="col-sm-6">
                     <label for="one">Yes</label>
                  <input type="radio" id="1" name="1" value="1" />
                  <label for="two">No</label>
                  <input type="radio" id="2" name="1" value="2" /> 
                   </div>
                 </div>
                 </div>



                 <div class="col-md-6">
                  <div class="form-group row">
                    <label for="companyname" class="col-sm-4 col-form-label">Max&nbsp;Age:</label>
                    <div class="col-sm-6">
                     <input type="text" class="form-control" id="empcode" name="empcode" placeholder="Enter a Max Age">
                 </div>
                </div>
              </div>


              <div class="col-md-6">
                <div class="form-group row">
                  <label for="address" class="col-sm-4 col-form-label">Women&nbsp;ROI:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="address" name="address"   placeholder="Enter a Women ROI">
                     
                </div>
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Min&nbsp; Lone:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="email" placeholder="Enter a Min Lone" name="email" required>
                    
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group row">
              <label for="dob" class="col-sm-4 col-form-label">Part&nbsp;Pmt&nbsp;Floating:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="dob" name="dob"  placeholder="Enter a Part Pmt Floating ">
                
              
            </div>
          </div>
        </div>


        <div class="col-md-6">
          <div class="form-group row">
            <label for="mobile" class="col-sm-4 col-form-label">Min&nbsp;Income:</label>
            <div class="col-sm-6">
              <select type="text" class="form-control" id="dob" name="dob"  placeholder="Enter a Min Income">
              	<option disabled selected  value="0">Select One</option>
              </select>
             </div>
           </div>
         </div>


                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-4 col-form-label">Pre&nbsp;Closer&nbsp;Fixed:</label>
                    <div class="col-sm-6">
                     <input type="Date" class="form-control" id="empname" name="empname"   placeholder="Enter a Pre Closer Fixed">
                   </div>
                 </div>
                 </div>






              <div class="col-md-6">
                <div class="form-group row">
                  <label for="LeadType" class="col-sm-4 col-form-label">Min&nbsp;Tenure:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="LeadType" name="LeadType"   placeholder="Enter a Min Tenure">
                       
                </div>
              </div>
            </div>



          <div class="col-md-6">
            <div class="form-group row">
              <label for="dob" class="col-sm-4 col-form-label">Part&nbsp;Pmt&nbsp;Fixed:</label>
              <div class="col-sm-6">
                <input type="text"  class="form-control" placeholder="Enter a Credite No" id="email" name="email">
            </div>
          </div>
        </div>


     

           <div class="col-md-6">
            <div class="form-group row">
              <label for="department" class="col-sm-4 col-form-label">Max&nbsp;Tenure:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Enter a max Tenure" id="email" name="email">
              </div>
            </div>
          </div>






                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-4 col-form-label">Profession:</label>
                    <div class="col-sm-6">
                    <select type="text" class="form-control" id="email" placeholder="Enter a Profession" name="email">
                    	<option disabled selected  value="0">Select One</option>
                    </select>
                   </div>
                 </div>
                 </div>



                 <div class="col-md-6">
                  <div class="form-group row">
                    <label for="companyname" class="col-sm-4 col-form-label">Lock&nbsp;In&nbsp;Period:</label>
                    <div class="col-sm-6">
                     <input type="text" class="form-control" id="empcode" name="empcode" placeholder="Lock In Period">
                  </div>
                </div>
              </div>


              <div class="col-md-6">
                <div class="form-group row">
                  <label for="address" class="col-sm-4 col-form-label">No&nbsp;Of&nbsp;Year&nbsp;Employment:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="address" name="address"   placeholder="Enter a No Of Year">
                     
                </div>
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Current&nbsp;Exp:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="email" placeholder="Enter a Current Exp" name="email">
                    
              </div>
            </div>
          </div>




                      <center>
                        <div class="col-md-12">
                        <input type="submit" name="Button1" value="Submit" id="Button1" class="btn btn-primary">
                        <input type="submit" name="Button2" value="Reset" id="Button2" class="btn btn-primary">
                      </div>
                      </center>



      
        </form>
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

           
<div class="table-responsive">
  
   <table id="example" class="table table-bordered table-striped">
    <thead>
         <tr>
                <th>Sr.No.</th>
                <th>Bank Product Id</th>
                <th>Bank Name</th>
                <th>Product</th>
                <th>Max Age</th>
                <th>Min Income</th>
                <th>Max Loan Amt</th>
                <th>Min Tenure</th>
                <th>Max Tenure</th>
                <th>Msg</th>
                <th>Edit Product Web</th>
                <th>Edit Web foir</th>
                <th>Edit Web intrest</th>
                <th>Edit Web Pf</th>
                <th>Edit Web Ltv</th>
            </tr>

            </thead>
            <tbody>
              
              <tr>
                <td>0.00%</td>
                <td>0.00%</td>
                <td>0.00%</td>
                <td>0.00%</td>
                <td>0.00%</td>
                <td>0.00%</td>
                <td>0.00%</td>
                <td>0.00%</td>
                <td>0.00%</td>
                <td>0.00%</td>
                <td><i  class="fa fa-edit" id="GridView1_lblEdit_4"  href="bank-master"></i></td>
                <td><a type="button" href="#" class="btn btn-link">Edit</a></td>
                <td><a type="button" href="#" class="btn btn-link">Edit</a></td>
                <td><a type="button" href="#" class="btn btn-link">Edit</a></td>
                <td><a type="button" href="#" class="btn btn-link">Edit</a></td>
              </tr>
    
      </tbody>
    </table>
  </div>
</div>
 </div>
</div>
  </div>


<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection