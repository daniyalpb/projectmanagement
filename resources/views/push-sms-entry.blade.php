@extends('include.master')
@section('content')
  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">PUSH SMS Entry</h3>
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
          

                  
                   <div class="col-md-12">
                   	<div class="form-group row">
                        <label for="empcode" class="col-sm-2 col-form-label">Select Date:</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control datepicker_id" id="empcode" name="empcode" value="<?php echo date('Y-m-d');?>">
                        </div>
                      </div>
                  </div>


                  <div class="col-md-6">
                   	<div class="form-group row">
                        <label for="empname" class="col-sm-4 col-form-label">Select Time:</label>
                        <div class="col-sm-6">
                          <select type="Date" class="form-control" id="empname" name="empname">
                          </select>
                        </div>
                      </div>
                  </div>



                  <div class="col-md-6">
                   	<div class="form-group row">	
                   		<div class="col-sm-6">
                          <select type="Date" class="form-control" id="empname" name="empname">
                          </select>
                        </div>
                    </div>
                  </div>


                  <div class="col-md-12">
                   	<div class="form-group row">
                        <label for="empname" class="col-sm-2 col-form-label">SMS Message:</label>
                        <div class="col-sm-7">
                          <textarea type="text" class="form-control" id="empname" name="empname"></textarea>
                        </div>
                    </div>
                  </div>

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
                <th >Sr.No</th>
                <th >Employee Name</th>
                <th >Emp Code</th>
                <th ><input type="checkbox" name=""></th>
            </tr>

            </thead>
            <tbody>

              @foreach($smsdata as $val)
          
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{$val->Emp_Name}}</td>
            <td>{{$val->Emp_Code}}</td>
             <td><input type="checkbox" name=""></td>
            
                    
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
</div>
        
       
</div>
</div>

         
@endsection