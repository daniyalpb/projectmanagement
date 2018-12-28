@extends('include.master')
@section('content')



  <div class="content">
    <div class="box box-default">
        <div class="box-header with-border">
         <center><h3 class="box-title">Releses</h3></center> 



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
                    <th>Versions</th> 
                    <th>Status</th> 
                    <th> Progress</th>
                  
                    <th>Description</th>
                    <th>Start_Date</th>
                    <th>Release_date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
               @foreach($data as $val)
        
                     <td>{{$val->Versions}}</td>
                     <td>{{$val->Status}}</td>
                     <td>{{$val->Progress}}</td>
                   
                     <td>{{$val->Description}}</td>
                      <td>{{$val->Start_Date}}</td>
                      <td>{{$val->Release_date}}</td>
                      <td>{{$val->Action}}</td>
                 
                 
                  
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
<div>




  <script>
  $(document).ready(function() {
  $('#example').DataTable();
  } );
  </script>





  @endsection