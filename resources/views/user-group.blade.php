@extends('include.master')
@section('content')
  <div class="content">
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <center><h3 style="color: #0099FF;">Group Master</h3></center>
        </div><br><br>
       <!-- **Header section end -->






      <form class="form-horizontal" name="app_version_master" id="app_version_master"  method="post">
           {{csrf_field()}}

              <div class="form-group">



                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                  <label for="name" class="col-lg-4 control-label">Group&nbsp;Name:</label>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="Version_Code" name="Version_Code"  value="" style="margin-left: -15%;">
                </div>
              <div class="col-sm-4"></div><br><br>


              <div class="col-sm-2"></div>
                <div class="col-sm-2">
                  <label for="App_Type_Name" class="col-lg-4 control-label">Is&nbsp;Admin:</label>
                </div>
                <div class="col-sm-4">
                  <select  class="form-control" id="App_Type_Name" name="App_Type_Name" style="margin-left: -15%;">
                    <option disabled selected  value="">Select One</option>
                    </select>
                </div>
              <div class="col-sm-4">
              </div><br><br>


            <div class="col-sm-2"></div>
            <div class="col-sm-2">
              <label for="checkbox" class="col-lg-4 col-sm-12 control-label">Is&nbsp;Active:</label>
            </div>
          <div class="col-sm-4">
            <div class="checkbox">
              <label><input id="active" name="active" type="checkbox" value="" style="zoom:1.5;" /></label>
            </div>
                <div class="col-sm-4"></div></div>
              </div>  
            <center>
                <input type="submit" name="Button1" value="Submit" id="Button1" class="btn btn-primary">
                <button type="reset">Reset</button>
              </center><br><br>

          </form>
      </div>
  </div>


  @endsection
