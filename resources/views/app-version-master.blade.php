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
           
           <table id="example" class="table table-striped table-bordered" role="grid" aria-describedby="         otp-details-id_info" style=" border: 1px black font-size: normal;">
             <thead>
               <tr style="background-color: #87CEFA;border: 1px ridge black;">
                      <th style="border:1px ridge black;">Sr No</th>
                      <th style="border:1px ridge black;">Id</th>
                      <th style="border:1px ridge black;">App Type</th>
                      <th style="border:1px ridge black;">Version Code</th>
                      <th style="border:1px ridge black;">Created-Datetime</th>
                      <th style="border:1px ridge black;">Version History</th>

                  </tr>
      
                  </thead>
                  <tbody>
                 
                    @foreach($users as $val)
          
                    <tr>
                        <td style="border:1px ridge black;">{{ $no++ }}</td>
                        <td style="border:1px ridge black;">{{$val->Id }}</td>
                        <td style="border:1px ridge black;">{{$val->App_Type_Name}}</td>
                        <td style="border:1px ridge black;">{{$val->Version_Code}}</td>
                        <td style="border:1px ridge black;">{{$val->Created_Datetime}}</td>
        <td style="border:1px ridge black;"><a href="{{URL::to('app-version-master-history')}}">History</a></td>
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