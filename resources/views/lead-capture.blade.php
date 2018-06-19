@extends('include.master')
@section('content')
  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Lead Capture</h3>
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

            <form class="form-horizontal" name="employee_form" id="employee_form"  method="post">
                {{csrf_field()}}


                <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empcode" class="col-sm-4 col-form-label">Select&nbsp;Date:</label>
                        <div class="col-sm-6">
                            <input type="Date" name="" id="" class="form-control">
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-4 col-form-label">Name:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="Time" name="Time" placeholder="Enter a Name">
                   </div>
                 </div>
                 </div>

                 <div class="col-md-6">
                  <div class="form-group row">
                    <label for="companyname" class="col-sm-4 col-form-label">Email&nbsp;Id:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="companyname" name="companyname" placeholder="Enter a Email Id">                        
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label for="address" class="col-sm-4 col-form-label">Mobile.No.:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter a Mobile No">   
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Select&nbsp;City:</label>
                <div class="col-sm-6">
                  <select type="text" class="form-control" id="email" name="email" required>
                    <option disabled selected  value="0">Select&nbsp;City</option>
                       @foreach($lead as $lead)
                       <option value="{{$lead->City_Id}}">{{$lead->City_Name}}</option>
                       @endforeach 
                  </select>
              </div>
            </div>
          </div>

          <div class="col-md-6">
                <div class="form-group row">
                  <label for="address" class="col-sm-4 col-form-label">Company&nbsp;Name:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter a Company Name">   
                </div>
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group row">
                  <label for="address" class="col-sm-4 col-form-label">Select&nbsp; Profession:</label>
                  <div class="col-sm-6">
                    <select type="text" class="form-control" id="address" name="address">
                    <option>select</option>
                       @foreach($users as $user)
                       <option value="{{$user->Profession_id}}">{{$user->Profession_Name}}</option>
                       @endforeach 
                  </select>   
                </div>
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group row">
                <label for="address" class="col-sm-4 col-form-label">Select&nbsp;Vertical:</label>
                  <div class="col-sm-6">
                    <select type="text" class="form-control" id="add" name="add">
                     <option>select</option>
                       @foreach($selects as $select)
                       <option value="{{$select->Vertical_Id}}">{{$select->Vertical_Name}}</option>
                       @endforeach 
                  </select>   
                </div>
              </div>
            </div>

             <div class="col-md-6">
                <div class="form-group row">
                  <label for="address" class="col-sm-4 col-form-label">Assign&nbsp;To&nbsp;*:</label>
                  <div class="col-sm-6">
                    <select type="text" class="form-control" id="address" name="address"> 
                    <option>Select</option>
                       @foreach($assign as $assign)
                       <option value="{{$assign->Emp_Code}}">{{$assign->Emp_Name}}</option>
                       @endforeach 
                  </select>  
                </div>
              </div>
            </div>


             <div class="col-md-6">
                <div class="form-group row">
                  <label for="address" class="col-sm-4 col-form-label">Remark:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter a Remark">   
                </div>
              </div>
            </div>

            
            <div class="col-md-6">
                <div class="form-group row">
                  <label for="address" class="col-sm-4 col-form-label">Select&nbsp;TieUp:</label>
                  <div class="col-sm-6">
                    <select type="text" id="first_item" name="first_item" class="form-control" value="1">
                    <option selected disabled="0">select one</option>
                    <option value="1">Customer</option>
                    <option value="2">Broker</option>
                  </select>
                  </div>
                </div>
              </div>


              <div class="col-md-6">
                <div class="form-group row">
                  <label for="address" class="col-sm-4 col-form-label">Call&nbsp;Type:</label>
                  <div class="col-sm-6">
                    <select type="text" id="first_item" name="first_item" class="form-control" value="1">
                    <option selected disabled="0">select one</option>
                    <option value="1">Calling</option>
                    <option value="2">Field Visit</option>
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
