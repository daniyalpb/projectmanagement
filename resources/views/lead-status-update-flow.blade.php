@extends('include.master')
@section('content')
  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
         <h3 class="box-title"> Lead Status Update Flow</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

        

 <div class="box-body">
 <!--  <center><h3 style="color: #0099FF;">Manage Leads</h3></center><hr> -->
          <div class="row">  <!-- for center -->
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
              <!-- a -->
            <form class="form-horizontal" name="employee_form" id="employee_form"  method="POST">
              {{csrf_field()}}

             <center><h4>Personal Details</h4></center><hr>
             <div class="col-md-6">
             <div class="form-group row">
                  <label for="Lead_id" class="col-sm-4 col-form-label">Lead Id:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="Lead_id" name="Lead_id" value="{{$user->Lead_id}}">
                  </div>
                </div>
              </div>


            <div class="col-md-6">
             <div class="form-group row">
                  <label for="dob" class="col-sm-4 col-form-label">Date Of Birth:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="dob" name="dob" value="{{$user->dob}}">
                  </div>
                </div>
              </div>


            <div class="col-md-6">
               <div class="form-group row">
               <label for="name" class="col-sm-4 col-form-label">Name:</label>
               <div class="col-sm-8">
                 <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                </div>
              </div>
            </div>


            <div class="col-md-6">
               <div class="form-group row">
                 <label for="pan" class="col-sm-4 col-form-label">PAN No:</label>
                 <div class="col-sm-8">
                   <input type="text" class="form-control" id="pan" name="pan" value="{{$user->pan}}">
                 </div>
               </div>
             </div>


            <div class="col-md-6">
             <div class="form-group row">
                  <label for="mobile" class="col-sm-4 col-form-label">Mobile No:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="mobile" name="mobile" value="{{$user->mobile}}">
                  </div>
                </div>
              </div>


            <div class="col-md-6">
               <div class="form-group row">
               <label for="City" class="col-sm-4 col-form-label">Aadhaar No:</label>
               <div class="col-sm-8">
                 <input type="text" class="form-control" id="txttdate" name="txttdate" value="">                 
                </div>
              </div>
            </div>


            <div class="col-md-6">
               <div class="form-group row">
                 <label for="email" class="col-sm-4 col-form-label">Email Id:</label>
                 <div class="col-sm-8">
                   <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}">
                 </div>
               </div>
             </div>


             <div class="col-md-6">
               <div class="form-group row">
               <label for="Designation" class="col-sm-4 col-form-label">Designation:</label>
               <div class="col-sm-8">
                 <input type="text" class="form-control" id="Designation" name="Designation" value="{{$user->Designation}}">
                </div>
              </div>
            </div>


            <div class="col-md-6">
             <div class="form-group row">
                  <label for="ExpctDisbsDate" class="col-sm-4 col-form-label">Exp. disbursal Date:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="ExpctDisbsDate" name="ExpctDisbsDate" value="{{$user->ExpctDisbsDate}}">
                  </div>
                </div>
              </div>


            <div class="col-md-6">
               <div class="form-group row">
                 <label for="City_Name" class="col-sm-4 col-form-label">City:</label>
                 <div class="col-sm-8">
                   <select type="text" class="form-control" id="City_Name" name="City_Name">               
                      <option value="{{$user->cityid}}">{{$user->City_Name}}</option>
                    @foreach ($city as $city)
                    <option value="{{$city->City_Id}}">{{$city->City_Name}}</option>
                    @endforeach                   
                 </select>
                 </div>
               </div>
             </div>



             <div class="col-md-6">
             <div class="form-group row">
                  <label for="empcode" class="col-sm-4 col-form-label">Company Name:</label>
                  <div class="col-sm-8">
                    <input type="CompanyName" class="form-control" id="CompanyName" name="CompanyName" value="{{$user->CompanyName}}">
                  </div>
                </div>
              </div>


              <center><h4>Followup Details</h4></center><hr>

            <div class="col-md-6">
             <div class="form-group row">
                  <label for="empname" class="col-sm-4 col-form-label">Main&nbsp;Lead&nbsp;Status*:</label>
                  <div class="col-sm-8">
                    <select type="text" class="form-control" id="City" name="City" >
                    <option>Select One</option>
                 </select>
                  </div>
                </div>
              </div>


            <div class="col-md-6">
               <div class="form-group row">
               <label for="City" class="col-sm-4 col-form-label">Demo Given:</label>
               <div class="col-sm-8">
                <label >Is Demo Given?<input type="checkbox"  id="is_active" name="is_active" value="" style="zoom:1.5;"></label>
                </div>
              </div>
            </div>



            <div class="col-md-6">
               <div class="form-group row">
                 <label for="mobile" class="col-sm-4 col-form-label">Sub Lead Status*:</label>
                 <div class="col-sm-8">
                   <select type="text" class="form-control search_citynm" id="City" name="City" >
                    <option>Select One</option>
                 </select>
                 </div>
               </div>
             </div>


            <div class="col-md-6">
             <div class="form-group row">
                  <label for="empname" class="col-sm-4 col-form-label">Is Share :</label>
                  <div class="col-sm-8">
                    <select type="text" class="form-control" id="txttdate" name="txttdate">
                      <option value disabled selected="0">select</option>
                      <option value="1">Yes</option>
                      <option value="2">No</option>
                    </select>
                  </div>
                </div>
              </div>


            <div class="col-md-6">
               <div class="form-group row">
               <label for="FollowTime" class="col-sm-4 col-form-label">FollowUp Date:</label>
               <div class="col-sm-8">
                 <input type="text" class="form-control search_citynm" id="FollowTime" name="FollowTime" value="{{$user->FollowTime}}"> 
                </div>
              </div>
            </div>


            <div class="col-md-6">
               <div class="form-group row">
                 <label for="sharePercent" class="col-sm-4 col-form-label">Share(%):</label>
                 <div class="col-sm-8">
                   <input type="text" class="form-control" id="sharePercent" name="sharePercent" value="{{$user->sharePercent}}">
                 </div>
               </div>
             </div>


             <div class="col-md-6">
               <div class="form-group row">
               <label for="City" class="col-sm-4 col-form-label">Follow Time:</label>
               <div class="col-sm-8">
                 <select type="text" class="form-control search_citynm" id="City" name="City" value="">
                    <option>Select One</option>
                 </select>
                </div>
              </div>
            </div>


            <div class="col-md-6">
               <div class="form-group row">
                 <label for="mobile" class="col-sm-4 col-form-label">Call Type:</label>
                 <div class="col-sm-8">
                   <select type="text" class="form-control search_Emp_Name" id="mobile" name="mobile">
                    <option selected disabled value="0">select</option>
                    <option value="1">Calling</option>
                    <option value="2">Field Visit</option>
                   </select>
                 </div>
               </div>
             </div>

             <div class="col-md-6">
             <div class="form-group row">
                  <label for="source_id" class="col-sm-4 col-form-label">Source Name:</label>
                  <div class="col-sm-8">
                    <select type="text" class="form-control search_citynm" id="source_id" name="source_id">
                     <option value="{{$user->source_id}}">{{$user->source_name}}</option>
                    @foreach($source as $val)
                    <option value="{{$user->source_id}}">{{$user->source_name}}</option>
                    <@endforeach

                 </select>
                  </div>
                </div>
              </div>

            


            <div class="col-md-6">
               <div class="form-group row">
               <label for="City" class="col-sm-4 col-form-label">Broker Name:</label>
               <div class="col-sm-8">
                 <select type="text" class="form-control search_citynm" id="City" name="City">
                    <option value="0">Select One</option>
                    @foreach($broker as $val)
                    <option value="{{$val->Broker_id}}">{{$val->Broker_Name}}</option>
                    @endforeach
                 </select>
                </div>
              </div>
            </div>


            <div class="col-md-6">
               <div class="form-group row">
                 <label for="mobile" class="col-sm-4 col-form-label">Business Manager:</label>
                 <div class="col-sm-8">
                   <select type="text" class="form-control search_citynm" id="City" name="City">
                    <option>Select One</option>
                 </select>
                 </div>
               </div>
             </div>


            <div class="col-md-6">
             <div class="form-group row">
                  <label for="empname" class="col-sm-4 col-form-label">Assign To*:</label>
                  <div class="col-sm-8">
                    <select type="text" class="form-control search_citynm" id="City" name="City">
                    <option value="0">Select One</option>
                    @foreach($assign as $assign)
                    <option value="{{$assign->Emp_Code}}">{{$assign->Emp_Name}}</option>
                    @endforeach
                 </select>
                  </div>
                </div>
              </div>


            <div class="col-md-6">
               <div class="form-group row">
               <label for="City" class="col-sm-4 col-form-label">Relationship Manager:</label>
               <div class="col-sm-8">
                 <select type="text" class="form-control search_citynm" id="City" name="City">
                    <option>Select One</option>
                 </select>
                </div>
              </div>
            </div>


            <div class="col-md-6">
               <div class="form-group row">
                 <label for="mobile" class="col-sm-4 col-form-label">Business Head:</label>
                 <div class="col-sm-8">
                   <select type="text" class="form-control search_citynm" id="City" name="City">
                    <option>Select One</option>
                 </select>
                 </div>
               </div>
             </div>


             <div class="col-md-6">
               <div class="form-group row">
               <label for="Uploaded_Dt" class="col-sm-4 col-form-label">Upload Disbursed:</label>
               <div class="col-sm-8">
                 <input type="file" class="form-control" id="Uploaded_Dt" name="Uploaded_Dt" value="{{$user->Uploaded_Dt}}">
                </div>
              </div>
            </div>


            <div class="col-md-6">
               <div class="form-group row">
                 <label for="mobile" class="col-sm-4 col-form-label">Business Head:</label>
                 <div class="col-sm-8">
                   <input type="text" class="form-control search_Emp_Name" id="mobile" name="mobile" value="">
                 </div>
               </div>
             </div>


             <div class="col-md-6">
               <div class="form-group row">
                 <label for="Remark" class="col-sm-4 col-form-label">Remark:</label>
                 <div class="col-sm-8">
                   <input type="text" class="form-control" id="Remark" name="Remark" value="{{$user->Remark}}">
                 </div>
               </div>
             </div>

             <div class="col-md-12">
               <div class="form-group row">
                 <label for="mobile" class="col-sm-2 col-form-label">Disbursed Document :</label>
                 <div class="col-sm-4">
                   <input type="text" class="form-control search_Emp_Name" id="mobile" name="mobile" value="">
                 </div>
               </div>
             </div>



              <center><h4>Bank Details</h4></center><hr>

            <div class="col-md-6">
             <div class="form-group row">
                  <label for="empname" class="col-sm-4 col-form-label">Bank Name:</label>
                  <div class="col-sm-8">
                    <select type="text" class="form-control" id="txttdate" name="txttdate">
                      <option>Select One</option>
                      @foreach($bank as $bank)
                      <option value="{{$bank->Bank_Id}}">{{$bank->Bank_Name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>


            <div class="col-md-6">
               <div class="form-group row">
               <label for="Bank_RM_Name" class="col-sm-4 col-form-label">Bank RM Name:</label>
               <div class="col-sm-8">
                 <input type="text" class="form-control" id="Bank_RM_Name" name="Bank_RM_Name" value="{{$user->Bank_RM_Name}}">
                </div>
              </div>
            </div>


            <div class="col-md-6">
               <div class="form-group row">
                 <label for="productid" class="col-sm-4 col-form-label">Product Name*:</label>
                 <div class="col-sm-8">
                   <input type="text" class="form-control search_Emp_Name" id="productid" name="productid" value="{{$user->productid}}">
                 </div>
               </div>
             </div>


            <div class="col-md-6">
             <div class="form-group row">
                  <label for="Bank_RM_NO" class="col-sm-4 col-form-label">Bank RM Mobile:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="Bank_RM_NO" name="Bank_RM_NO" value="{{$user->Bank_RM_NO}}">
                  </div>
                </div>
              </div>


            <div class="col-md-6">
               <div class="form-group row">
               <label for="loan_amt" class="col-sm-4 col-form-label">Loan Amount*:</label>
               <div class="col-sm-8">
                 <input type="text" class="form-control search_citynm" id="loan_amt" name="loan_amt" value="">
                </div>
              </div>
            </div>


            <div class="col-md-6">
               <div class="form-group row">
                 <label for="Bank_Login_Id" class="col-sm-4 col-form-label">Bank Login Id:</label>
                 <div class="col-sm-8">
                   <input type="text" class="form-control search_Emp_Name" id="Bank_Login_Id" name="Bank_Login_Id" value="{{$user->Bank_Login_Id}}">
                 </div>
               </div>
             </div>


             <div class="col-md-6">
               <div class="form-group row">
               <label for="Loan_Acc_No" class="col-sm-4 col-form-label">Loan A/c No:</label>
               <div class="col-sm-8">
                 <input type="text" class="form-control" id="Loan_Acc_No" name="Loan_Acc_No" value="{{$user->Loan_Acc_No}}">
                </div>
              </div>
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