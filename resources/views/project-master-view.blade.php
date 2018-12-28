@extends('include.master')
@section('content')
  <div class="content">
    <div class="box box-default">
        <div class="box-header with-border">
         <center><h3 class="box-title">Task View</h3></center> 
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

         <div class="box-body container">
   <!-- <center><h3 style="color: #0099FF;">Employee list</h3></center><hr> -->
         <div class="table-responsive">
                 <table class="table table-bordered" id="example">
                <thead>
                  <tr>
                    <th>Sr.No</th> 
                    <th>Project Name</th> 
                    <th>Task Name</th>
                    <th>Description</th>
                    <th>Created By</th>
                    <th>Created Date</th>                              
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $val)
                  <tr>
                     <td>{{ $no++ }}</td>
                     <td>{{$val->project_name}}</td>
                     <td>{{$val->task_name}}</td>
                     <td><textarea>{{$val->description}}</textarea></td>
                     <td>{{$val->name}}</td>
                     <td>{{$val->created_date}}</td>
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