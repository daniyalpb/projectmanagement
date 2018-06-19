@extends('include.master')
@section('content')
  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
       <h3 class="box-title">City Wise Employee</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

        

 <div class="box-body">
  <!-- <center><h3 style="color: #0099FF;">Break Master</h3></center><hr> -->
          <div class="row">  <!-- for center -->
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-6 col-sm-offset-2">
            <form class="form-horizontal" name="break_master" id="break_master"  method="post">
           {{csrf_field()}}


                   <div class="form-group row">
                        <label for="City_Id" class="col-sm-2 col-form-label">City&nbsp;Name:</label>
                        <div class="col-sm-10">
                          <select class="form-control" id="City_Id" name="City_Id" >
                             <option disabled selected  value="0">Select&nbsp;One</option>                
                        @foreach($users as $user)
                      <option value="{{$user->City_Id}}">{{$user->City_Name}}</option>
                       @endforeach
                          </select>
                        </div>
                      </div>



                      <div class="form-group row">
                        <label for="Emp_Code" class="col-sm-2 col-form-label">Employee:</label>
                        <div class="col-sm-10">
                          <select  class="form-control" id="Emp_Code" name="Emp_Code" >
                    <option disabled selected  value="0">Select&nbsp;One</option>
                     @foreach($name as $name)
                       <option value="{{$name->EmpId}}">{{$name->Emp_Name}}</option>
                       @endforeach 
                  </select>
                        </div>
                      </div>

                      <center>
                        <input type="submit" name="Button1" value="Submit" id="Button1" class="btn btn-primary">
                        <input type="submit" name="Button2" value="Reset" id="Button2" class="btn btn-primary">
                      </center>

                      
        
        </form>
      </div>
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
                 <!-- <th> <input type="checkbox" name=""></th> -->
                 <th>Sr.No.</th>
                 <th>Map Id</th>
                <th>City Name</th>
                <th>Employee Name</th>
               
            </tr>

            </thead>
            <tbody>

           @foreach($smsdata as $val)
              <tr>
               <!--  <td> <input type="checkbox" name=""></td> -->
                <td>{{ $no++ }}</td>
                 <td>{{$val->Map_Id}}</td>
                <td>{{$val->City_Name}}</td>
                <td>{{$val->Emp_Name}}</td>
              </tr>
           @endforeach
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