@extends('include.master')
@section('content')
  <div class="content">
     <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
          <center><h3 style="color: #0099FF;">App Version Master</h3></center>
        </div><br><br>
       <!-- **Header section end -->
          




      <form class="form-horizontal" name="app_version_master" id="app_version_master"  method="post">
           {{csrf_field()}}

    <script>
 $(document).ready(function() {
     $('#example').DataTable();
 } );
 </script>
        
        <div class="container">
         <div class="table-responsive">
           
           <table id="example" class="table table-striped table-bordered" role="grid" aria-describedby="otp-details-id_info">
             <thead>
               <tr>
                  
                      <th>Id</th>
                      <th>App Type</th>
                      <th>Version Code</th>
                      <th>Created-Datetime</th>
                     

                  </tr>
      
                  </thead>
                  <tbody>
                 
                    @foreach($users as $val)
          
                    <tr>
                       
                        <td>{{$val->Id }}</td>
                        <td>{{$val->App_Type_Name}}</td>
                        <td>{{$val->Version_Code}}</td>
                        <td>{{$val->Created_Datetime}}</td>
                        
                    </tr>
                   @endforeach
           
            </tbody>
          </table>
        </div>
      </div>
    </form>
  </div>
    </div>

     @endsection