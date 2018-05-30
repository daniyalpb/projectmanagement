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
          <center><h3 style="color: #0099FF;">Menu Master</h3></center><hr>
          <div class="row">  <!-- for center -->
            <div class="Absolute-Center is-Responsive">
              <div id="logo-container"></div>
              <!-- a -->

            <form class="form-horizontal" name="employee_form" id="employee_form"  method="post">
                {{csrf_field()}}


                <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empcode" class="col-sm-4 col-form-label">Module&nbsp;Name:</label>
                        <div class="col-sm-6">
                          <select type="text" class="form-control" id="empcode" name="empcode" required>
                          <option disabled selected  value="0">Select One</option>
                          @foreach ($module as $module)
                          <option value="">{{ $module->Module_Name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-4 col-form-label">Menu&nbsp;Name:</label>
                    <div class="col-sm-6">
                     <input type="text" class="form-control" id="empname" name="empname"   placeholder="Enter a Menu Name"  required>
                   </div>
                 </div>
                 </div>



                 <div class="col-md-6">
                  <div class="form-group row">
                    <label for="companyname" class="col-sm-4 col-form-label">Parent&nbsp;Name:</label>
                    <div class="col-sm-6">
                      <select type="text" class="form-control" id="companyname" name="companyname" required>
                        <option disabled selected  value="0">Select One</option>
                        @foreach ($menu_parent as $menu_parent)
                        <option value="">{{ $menu_parent->Menu_Parent}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>


              <div class="col-md-6">
                <div class="form-group row">
                  <label for="address" class="col-sm-4 col-form-label">Menu&nbsp;Lavel::</label>
                  <div class="col-sm-6">
                    <select type="text" class="form-control" id="address" name="address"   placeholder="Enter a Address"  required>
                      <option disabled selected  value="0">Select One</option>
                      @foreach ($menu_level as $menu_level)
                      <option value="">{{ $menu_level->Menu_Level}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Menu&nbsp;Sequence:</label>
                <div class="col-sm-6">
                  <select type="text" class="form-control" id="email" name="email" required>
                    <option disabled selected  value="0">Select One</option>
                    @foreach ($menu_sequence as $menu_sequence)
                    <option value="">{{ $menu_sequence->Menu_Sequence}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group row">
              <label for="dob" class="col-sm-4 col-form-label">Menu&nbsp;Type:</label>
              <div class="col-sm-6">
                <select type="Date" class="form-control" id="dob" name="dob"  placeholder="Enter a DOB"  required>
                  @foreach ($menu_type as $menu_type)
                  <option value="">{{ $menu_type->Menu_Type}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>


        <div class="col-md-6">
          <div class="form-group row">
            <label for="mobile" class="col-sm-4 col-form-label">Menu&nbsp;Action::</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="mobile" name="mobile"   placeholder="Enter a Bank Name" minlength="10" maxlength="10" onkeypress="return fnAllowNumeric(event)" required>
               </div>
             </div>
           </div>


           <div class="col-md-6">
            <div class="form-group row">
              <label for="department" class="col-sm-4 col-form-label">Menu&nbsp;Display::</label>
              <div class="col-sm-6">
                <select type="text" class="form-control" id="department" name="department" required>
                  <option disabled selected  value="">Select One</option>
                </select>
              </div>
            </div>
          </div>


          <center>
            <button type="submit" id="sub" class="btn btn-primary">Submit</button>
            <button type="reset" value="Reset">Reset</button>
         </center>
       </form>
      </div>
    </div>
  </div>
</div>
</div>

 @endsection
