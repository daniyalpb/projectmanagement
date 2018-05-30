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
          <center><h3 style="color: #0099FF;">Broker Invoice Register</h3></center><hr>
          <div class="row">  <!-- for center -->
            <div class="Absolute-Center is-Responsive">
              <div id="logo-container"></div>
              <!-- a -->

            <form class="form-horizontal" name="employee_form" id="employee_form"  method="post">
                {{csrf_field()}}


                <div class="col-md-6">
                   <div class="form-group row">
                        <label for="empcode" class="col-sm-2 col-form-label" style="margin-left: 30%;">From&nbsp;Date:</label>
                       <div class="col-md-6">
                  <input type="date" class="form-control" id="LeadType" name="LeadType" value="<?php echo date('Y-m-d');?>">
                  </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="empname" class="col-sm-2 col-form-label" >To&nbsp;Date:</label>
                    <div class="col-sm-6">
                  <input type="date" class="form-control"   id="companyname" name="companyname" value="<?php echo date('Y-m-d');?>">
                   </div>
                 </div>
                 </div>

              
          <center>
            <div class="col-md-12">
              <button type="submit" id="sub" class="btn btn-primary">Generate Report</button>
            </div>
          </center>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

@endsection