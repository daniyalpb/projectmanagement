@extends('include.master')
@section('content')
  <div class="content">
  <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Product Master</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

        

 <div class="box-body">
 <!--  <center><h3 style="color: #0099FF;">Product Master</h3></center><hr> -->
          <div class="row">  <!-- for center -->
              <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-6 col-sm-offset-2">
            <form class="form-horizontal" name="product_master" id="product_master"  method="post">
            {{csrf_field()}}
          

                    <div class="form-group row">
                      <label for="Product_Name" class="col-sm-4 col-form-label">Product&nbsp;Name:</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="Product_Name" name="Product_Name"  value="" placeholder="Product Name"  required>
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="Document" class="col-sm-4 col-form-label">Select&nbsp;File:</label>
                       <div class="col-sm-8">
                         <input type="file" class="form-control" id="Document" name="Document"  value="" placeholder="Product Name" >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="Is_Active" class="col-sm-4 col-form-label">Is&nbsp;Active:</label>
                       <div class="col-sm-8">
                        <input type="checkbox"  id="Is_Active " name="Is_Active" value="Yes" style="zoom:1.5;">
                       </div>
                    </div>

                    <center>
                        <input type="submit" name="Button1" value="Submit" id="Button1" class="btn btn-primary">
                        <input type="Reset" value="Reset" class="btn btn">
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
            <th>Prod Id</th>
            <th>Product Name</th>
            <th>Is Active</th>
            <th>Document</th>
            <th>Created On</th>
          </tr>
        </thead>

        <tbody>
    @foreach($users as $val)
          
        <tr>
            <td>{{$val->Product_Id}}</td>
            <td>{{$val->Product_Name}}</td>
            <td>{{$val->Is_Active}}</td>
            <td>{{$val->Document}}</td>
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