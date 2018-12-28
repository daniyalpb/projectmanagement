@extends('include.master')
@section('content')
  <div class="content">
    <div class="box box-default">
        <div class="box-header with-border">
         <center><h3 class="box-title">Unrelesed Task</h3></center> 
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
                     <th>Project Name</th> 
                    <th>Created Date</th> 
                    <th>description</th>
                    <th>Status</th>
                    <th>Reporter</th>
                    <th>Owner</th>
                                              
                  </tr>
                </thead>
                <tbody>
                  @foreach($unrelesed as $val)
                  <tr>
                     <!-- <td>{{ $no++ }}</td> -->
                     <td>{{$val->project_name}}</td>
                     <td>{{$val->created_date}}</td>
                     <td>{{$val->description}}</td>
                     <td style="color:salmon; text-decoration:underline; ">{{$val->Status}}</td>
                     <td>{{$val->Reporter}}</td>
                     <td>{{$val->Owner}}</td>
                    

                    


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