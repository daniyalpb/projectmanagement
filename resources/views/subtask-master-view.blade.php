@extends('include.master')
@section('content')
  <div class="content">
    <div class="box box-default">
        <div class="box-header with-border">
         <center><h3 class="box-title">Sub Task Master View </h3></center> 
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

         <div class="box-body ">
   <!-- <center><h3 style="color: #0099FF;">Employee list</h3></center><hr> -->
         <div class="table-responsive">
                 <table class="table table-bordered" id="example">
                <thead>
                  <tr>
                   <!--  <th>Sr.No</th>  -->
                    <th>Name</th> 
                    <th>Assigned_To</th> 
                    <th> Assigned_Date</th>
                    <th>Status</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Remark</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody>
               @foreach($data as $val)
        
                     <td>{{$val->Name}}</td>
                     <td>{{$val->Assigned_To}}</td>
                     <td>{{$val->Assigned_Date}}</td>
                     <td>{{$val->Status}}</td>
                     <td>{{$val->Start_Date}}</td>
                      <td>{{$val->End_Date}}</td>
                      <td>{{$val->Remark}}</td>
                      <td>{{$val->Description}}</td>
                 
                 
                  
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