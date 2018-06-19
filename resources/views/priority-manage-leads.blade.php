@extends('include.master')
@section('content')
  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Priority Manage Leads</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

        

 <div class="box-body">
 <!--  <center><h3 style="color: #0099FF;">Product Master</h3></center><hr> -->
          <div class="row">  <!-- for center -->
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
               <!--  <div class="col-sm-6 col-sm-offset-2"> -->
            <form class="form-horizontal" name="product_master" id="product_master"  method="post">
            {{csrf_field()}}
          

                  
                   <div class="col-md-6">
                   	<div class="form-group row">
                        <label for="empcode" class="col-sm-4 col-form-label">From Date:</label>
                        <div class="col-sm-8">
                          <input type="Date" class="form-control" id="empcode" name="empcode" value="<?php echo date('Y-m-d');?>">
                        </div>
                      </div>
                  </div>


                  <div class="col-md-6">
                   	<div class="form-group row">
                        <label for="empname" class="col-sm-4 col-form-label">To Date:</label>
                        <div class="col-sm-8">
                          <input type="Date" class="form-control" id="empname" name="empname" value="<?php echo date('Y-m-d');?>">
                        </div>
                      </div>
                  </div>



                  <div class="col-md-12">
                   	<div class="form-group row">
                        <label for="empname" class="col-sm-2 col-form-label">Status:</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="empname" name="empname">

                        </div>
                          <button type="Show" class="btn btn-primary">Show</button>
                      </div>
                  </div>


                  <div class="col-md-12">
                   	<div class="form-group row">
                        <label for="empname" class="col-sm-2 col-form-label">Priority:</label>
                        <div class="col-sm-4">
                          <select type="text" class="form-control" id="empname" name="empname">
                          	<option></option>
                          </select>
                        </div>
                      </div>
                  </div>

                 
                      <center>
                        <button type="submit" name="Button1" value="Submit" id="Button1" class="btn btn-primary">Set Priority</button>
                      </center>

                      
        
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>

         
@endsection