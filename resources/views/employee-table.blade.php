@extends('include.master')
@section('content')
  <div class="content">
    <div class="box box-default">
        <div class="box-header with-border">
         <center><h3 class="box-title">Employee View</h3></center> 
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
                     <th>ID</th> 
                    <th>Employee Code</th> 
                    <th>Employee Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Created By</th>
                    <th>Created Date</th> 
                    <th>Edit</th>                                 
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $val)
                  <tr>
                     <!-- <td>{{ $no++ }}</td> -->
                     <td>{{$val->id}}</td>
                     <td>{{$val->emp_id}}</td>
                     <td>{{$val->emp_name}}</td>
                     <td>{{$val->mobile}}</td>
                     <td>{{$val->email}}</td>
                     <td>{{$val->name}}</td>
                     <td>{{$val->created_date}}</td>
                       <td><a href="employee-master-view/{{$val->id}}" class="btn btn-success a-btn-slide-text">
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Edit</strong></span>            
    </a></td>

                       <!--  <a type="button" id="modelbutton" class="btn btn-success" href="employee-master-view/{{$val->id}}" 
                       >Edit</a></td> -->


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