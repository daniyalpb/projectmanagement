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

              <div class="form-group">

                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                  <label for="App_Type_Name" class="col-lg-4 control-label">App&nbsp;Type:</label>
                </div>
                <div class="col-sm-4">
                  <select  class="form-control" id="App_Type_Name" name="App_Type_Name" style="margin-left: -15%;">
                    <option disabled selected  value="">Select One</option>
                     @foreach($users as $user)
                       <option value="{{$user->App_Type_Name}}">{{$user->App_Type_Name}}</option>
                       @endforeach 
                  </select>
                </div>
              <div class="col-sm-4"></div><br><br>


                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                  <label for="name" class="col-lg-4 control-label">Version&nbsp;Code:</label>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="Version_Code" name="Version_Code"  value="" style="margin-left: -15%;">
                </div>
              <div class="col-sm-4"></div><br><br>
            </div>
            <center>
                <input type="submit" name="Button1" value="Submit" id="Button1" class="btn btn-primary">
              </center><br><br>



       
        <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
        </script>
        
        <div class="container">
         <div class="table-responsive">
           
           <table id="example" class="table table-striped table-bordered" role="grid" aria-describedby="         otp-details-id_info">
             <thead>
               <tr>
                      <th>Sr No</th>
                      <th>Id</th>
                      <th>App Type</th>
                      <th>Version Code</th>
                      <th>Created-Datetime</th>
                      <th>Version History</th>

                  </tr>
      
                  </thead>
                  <tbody>
                 
                    @foreach($users as $val)
          
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{$val->Id }}</td>
                        <td>{{$val->App_Type_Name}}</td>
                        <td>{{$val->Version_Code}}</td>
                        <td>{{$val->Created_Datetime}}</td>
                        <td><a href="{{URL::to('app-version-master-history')}}">History</a></td>
                    </tr>
                   @endforeach
           
            </tbody>
          </table>
        </div>
      </div>
    </form>
  </div>
    </div>




  <!--     <script type="text/javascript">
  function demo(App_Type_Name){
    alert(Id);
    // document.getElementById("fba_id").value.empty();
     
     
    
    document.getElementById("App_Type_Name").value += App_Type_Name;


   // $('#fba_id').append(Designation);

  }
</script>
       -->



       @endsection