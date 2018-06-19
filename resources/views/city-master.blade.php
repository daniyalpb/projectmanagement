@extends('include.master')
@section('content')
  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
        <h3 class="box-title">City Master</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
            
        

 <div class="box-body">
  <!-- <center><h3 style="color: #0099FF;">City Master</h3></center><hr> -->
          <div class="row">  <!-- for center -->
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-6 col-sm-offset-2">
           <form class="form-horizontal" name="city_master" id="city_master"  method="post">
           {{csrf_field()}}
          

                   <div class="form-group row">
                        <label for="city_name" class="col-sm-2 col-form-label">City&nbsp;Name:</label>
                        <div class="col-sm-10">
                          <input type="city_name" class="form-control" id="city_name" name="city_name"  value="" placeholder="Enter a City Name"  required>
                        </div>
                      </div>



                      <div class="form-group row">
                        <label for="state_id" class="col-sm-2 col-form-label">State:</label>
                        <div class="col-sm-10">
                          <select  class="form-control" id="state_id" name="state_id" >
                    <option disabled selected  value="0">Select One</option>
                       @foreach($users as $user)
                       <option value="{{$user->state_id}}">{{$user->state_name}}</option>
                       @endforeach 
                       </select>
                        </div>
                      </div>

                       <div class="form-group row">
                        <label for="city_name" class="col-sm-2 col-form-label">Is&nbsp;Active:</label>
                        <div class="col-sm-10">
                         <label><input type="checkbox"  id="is_active" name="is_active" value="Yes" style="zoom:1.5;"></label>
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
                <th>Sr. No</th>
                <th>City name</th>
                <th>State Name</th>
              </tr>
            </thead>
            <tbody>
              @foreach($smsdata as $val)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$val->City_Name}}</td>
                <td>{{$val->state_name}}</td>
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
