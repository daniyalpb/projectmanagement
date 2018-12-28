@extends('include.master')
@section('content')
  <div class="content">
    <div class="box box-default">
        <div class="box-header with-border">
         <center><h3 class="box-title">Recently Resolved Issues</h3></center> 
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
                     <th>Project_Name</th> 
                    <th>TaskName</th> 
                    <th>Team</th>
                    <th>CreateDate</th>
                    <th>Reporter</th>
                    <th>Assignee</th>
                    <th>Issues</th> 
                    <th>Description</th>   
                    <th>Environment</th>       
                    <th>Images</th>                        
                  </tr>
                </thead>
                <tbody>
                  @foreach($query as $val)
                  <tr>
                   <!-- <td>{{ $no++ }}</td> -->
                   <td>{{$val->Project_Name}}</td>
                    <td>{{$val->TaskName}}</td>
                    <td>{{$val->Team}}</td>
                    <td>{{$val->CreateDate}}</td>
                    <td>{{$val->Reporter}}</td>
                    <td>{{$val->Assignee}}</td>
                    <td>{{$val->Issues}}</td>    
                    <td>{{$val->Description}}</td>
                    <td>{{$val->Environment}}</td>
                    <td>{{$val->Images}}</td>
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