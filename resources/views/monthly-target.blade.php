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
          <center><h3 style="color: #0099FF;">Assign Monthly Team Target</h3></center><hr>
          <div class="row">  <!-- for center -->
            <div class="Absolute-Center is-Responsive">
              <div id="logo-container"></div>
              <!-- a -->

            <form class="form-horizontal" name="employee_form" id="employee_form"  method="post">
                {{csrf_field()}}


                <div class="col-md-6">
                   <div class="form-group row">
                    <label for="empcode" class="col-sm-2 col-form-label" style="margin-left: 30%;">Select&nbsp;Year:</label>
                  <div class="col-md-6">
                  <select type="text" class="form-control" id="LeadType" name="LeadType">
                    <option>Select One</option>
                  </select>
                </div>
              </div>
            </div>


                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-2 col-form-label">Select&nbsp;Month:</label>
                    <div class="col-sm-6">
                  <select type="text" class="form-control"   id="companyname" name="companyname">
                    <option>Select One</option>
                  </select>
                   </div>
                   <button type="submit" id="sub"  class="btn btn-primary">Show</button>
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

@endsection