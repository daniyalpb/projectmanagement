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
                <div class="col-sm-6 col-sm-offset-2">
            <form class="form-horizontal" name="product_master" id="product_master"  method="post">
            {{csrf_field()}}
          

                  
                   
                   	<div class="form-group row">
                        <label for="empcode" class="col-sm-4 col-form-label">Vertical Name:</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="empcode" name="empcode">
                        </div>
                      </div>



                      <div class="table-responsive">
  
   <table id="table" class="table table-bordered table-striped">
    <thead>
           <tr>
                <th>Level</th>
                <th>Percentage</th>
                
            </tr>

            </thead>
            
      <tbody>
            <td>1</td>
            <td><input type="text" name="Payoutfrom1"  id="Payoutfrom1" class="form-control"></td>
      </tbody>

      <tbody>
            <td>2</td>
            <td><input type="text" name="Payoutfrom2" id="Payoutfrom2" class="form-control"></td>
      </tbody>

      <tbody>
            <td>3</td>
            <td><input type="text" name="Payoutfrom3" id="Payoutfrom3" class="form-control"></td>
      </tbody>

      <tbody>
            <td>4</td>
            <td><input type="text" name="Payoutfrom4" id="Payoutfrom4" class="form-control"></td>
      </tbody>

      <tbody>
            <td>5</td>
            <td><input type="text" name="Payoutfrom5" id="Payoutfrom5" class="form-control"></td>
      </tbody>
   </table>
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