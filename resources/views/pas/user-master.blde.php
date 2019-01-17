@extends('include.master')
@section('content')
  <div class="content">
    <div class="box box-default">
        <div class="box-header with-border">
         <center><h3 class="box-title">User Details</h3></center> 
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
                  <th>id</th>

                    <th>name</th> 
                    <th>email </th>
                    <th>Login Date</th>
                   
                    <th>Created Date</th> 
                    <th>Mobile</th>                                 
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $val)
                  <tr>
                  	<td>{{$val->id}}</td>
                     <td>{{$val->name}}</td>
                     <td>{{$val->email}}</td>
                     <td>{{$val->last_login_date}}</td>
                     <td>{{$val->Created_Date}}</td>
                     <td>{{$val->mobile}}</td>



                     <td><a href="user-login-details/{{$val->id}}" class="btn btn-success a-btn-slide-text">
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