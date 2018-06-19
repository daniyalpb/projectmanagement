@extends('include.master')
@section('content')
  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
         <center><h3 class="box-title">Campaign Wise Report</h3></center>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <!-- <center><h3 style="color: #0099FF;">Campaign Wise Report</h3></center><hr> -->
          <div class="row">  <!-- for center -->
            <div class="Absolute-Center is-Responsive">
              <div id="logo-container"></div>
              <!-- a -->

            <form class="form-horizontal" name="employee_form" id="employee_form"  method="post">
                {{csrf_field()}}


                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-3 col-form-label">From&nbsp;Date:</label>
                    <div class="col-sm-6">
                     <input type="Date" class="form-control" id="empname" name="empname"   placeholder="Enter a Menu Name"  required>
                   </div>
                 </div>
                 </div>


                  <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-3 col-form-label">To&nbsp;Date:</label>
                    <div class="col-sm-6">
                     <input type="Date" class="form-control" id="empname" name="empname"   placeholder="Enter a Menu Name"  required>
                   </div>
                 </div>
                 </div>





                 <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-3 col-form-label" >Select&nbsp;BH</label>
                    <div class="col-sm-6">
                     <select type="text" class="form-control"   id="companyname" name="companyname">
                     </select>
                   </div>
                 </div>
                </div>

                 <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-3 col-form-label" >Company&nbsp;BM</label>
                    <div class="col-sm-6">
                     <select type="text" class="form-control"   id="companyname" name="companyname">
                     </select>
                   </div>
                 </div>
                </div>


                 <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-3 col-form-label" >Select&nbsp;Source</label>
                    <div class="col-sm-6">
                     <select type="text" class="form-control"   id="companyname" name="companyname">
                     	<option disabled selected  value="">Select One</option>
                     	
                     </select>
                   </div>
                 </div>
                </div>

                 <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-3 col-form-label" >Select&nbsp;Campaign</label>
                    <div class="col-sm-6">
                     <select type="text" class="form-control"   id="companyname" name="companyname">
                     	 <option disabled selected  value="">Select One</option>
                     	
                     </select>
                   </div>
                 </div>
                </div>

              
          <center>
            <div class="col-md-12">
              <button type="submit" id="sub" class="btn btn-primary">Shows</button>
            </div>
          </center>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection