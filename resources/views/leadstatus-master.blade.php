@extends('include.master')
@section('content')
  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Lead Status Master</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

        

 <div class="box-body">
  <!-- <center><h3 style="color: #0099FF;">Lead Status Master</h3></center><hr> -->
          <div class="row">  <!-- for center -->
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-6 col-sm-offset-2">
           <form class="form-horizontal" name="leadstatus_master" id="leadstatus_master"  method="post">
              {{csrf_field()}}
          

                   <div class="form-group row">
                        <label for="Lead_Status" class="col-sm-2 col-form-label">Lead&nbsp;Status:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="Lead_Status" name="Lead_Status"  value="" placeholder="Enter a Lead Name"  required>
                        </div>
                      </div>




                       <div class="form-group row">
                        <label for="Is_Active" class="col-sm-2 col-form-label">Is&nbsp;Active:</label>
                        <div class="col-sm-10">
                         <label><input type="checkbox"  id="Is_Active" name="Is_Active" value="Yes" style="zoom:1.5;"></label>
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
            <th>Lead Status Id</th>
            <th>Lead Status</th>
            <th>Is Active</th>
            <th>Created On</th>
          </tr>
        </thead>

        <tbody >     
           @foreach($users as $val)
        <tr>
            <td>{{$val->Lead_Status_Id}}</td>
            <td>{{$val->Lead_Status}}</td>
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

       


<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

@endsection
