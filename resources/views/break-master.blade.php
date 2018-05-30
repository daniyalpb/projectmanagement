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
  <center><h3 style="color: #0099FF;">Break Master</h3></center><hr>
          <div class="row">  <!-- for center -->
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-6 col-sm-offset-2">
            <form class="form-horizontal" name="break_master" id="break_master"  method="post">
           {{csrf_field()}}


                   <div class="form-group row">
                        <label for="Break_Type" class="col-sm-2 col-form-label">Break&nbsp;Type:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Break_Type" name="Break_Type"  value="" placeholder="Enter a Break Type"  required>
                        </div>
                      </div>



                      <div class="form-group row">
                        <label for="Time" class="col-sm-2 col-form-label">Time:</label>
                        <div class="col-sm-10">
                          <select  class="form-control" id="Time" name="Time" >
                    <option disabled selected  value="0">Select&nbsp;Time</option>
                    <option value="1">13:00</option>
                    <option value="2">16:00</option>
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

          <div class="container">
<div class="table-responsive">
  
   <table id="example" class="table table-bordered table-striped">
    <thead>
         <tr>
                <th>Break Type</th>
                <th>Time</th>
                <th>Is_Active</th>
                <th>Created On</th>
            </tr>

            </thead>
            <tbody>
              @foreach($smsdata as $val)
              <tr>
                <td>{{$val->Break_Type}}</td>
                <td>{{$val->Time}}</td>
                <td>{{$val->Is_Active}}</td>
                <td>{{$val->Created_On}}</td>
              </tr>
        @endforeach
      </tbody>
    </table>
  </div>
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
